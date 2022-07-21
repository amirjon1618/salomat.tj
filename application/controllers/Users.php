<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH. 'libraries/REST_Controller.php';

class Users extends REST_Controller {

    /**
     * Construction
     */
    public function __construct(){

        parent::__construct();

        $this->load->library('session');
        $this->load->helper('security');
        $this->load->model('user');
        $this->load->library('form_validation');
        $this->load->database();
    }

    /**
     * Display a listing of the Users.
     *
     */
    public function index_get(){

        header("Access-Control-Allow-Origin: *");

        // Load Authorization token
        $this->load->library('Authorization_Token');

        // User Token Validation

        $is_valid_token = $this->authorization_token->validateToken();

         if(!empty($is_valid_token) && $is_valid_token['status'] === TRUE) {
             if (!empty($is_valid_token)) {
                 $headers = $this->input->request_headers();
                 $platform = $headers['platform'] ?? 'android';

                 if ($platform == 'IOS') {
                     $data = json_decode(file_get_contents('php://input'), true);
                     $_POST = $data;
                 }
                 // $this->load->model('driver_model');
                 $this->response($this->user->get_users(), REST_Controller::HTTP_OK);
             } else {
                 $message = [
                     'status' => FALSE,
                     'message' => $is_valid_token['message']
                 ];
                 $this->response($message, REST_Controller::HTTP_OK);
             }
         }
    }


    public function hash_pass($str)
    {
        return md5("ffxKS&@)|_'a".$str);
    }

    /**
     * Users register.
     *
     */
    public function register_post()
    {
        header("Access-Control-Allow-Origin: *");

        #Getting key from DB for hash
        $key = $this->user->get_keys();
        $key = $key[0]->key;

        #Form Validation
        $this->form_validation->set_rules('phone', 'Телефон', 'xss_clean|trim|required');
        $this->form_validation->set_rules('password', 'Пароль', 'xss_clean|trim|required|max_length[100]');
        $this->form_validation->set_rules('name', 'Имя', 'xss_clean|trim|required|max_length[100]');

        $headers    = $this->input->request_headers();
        $platform   = $headers['platform'] ?? 'android';

        if ($platform == 'IOS') {
            $data   = json_decode(file_get_contents('php://input'), true);
            $_POST  = $data;
        }

        $phone = $this->input->post('phone');
        $password = $this->input->post('password');
        $name = $this->input->post('name');

        if($this->form_validation->run() == false)
        {
            $message = array(
                'status'    => false,
                'error'     => $this->form_validation->error_array(),
                'message'   => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
        }
        else
        {
            $this->db->where('login', $phone);
            $query = $this->db->get('users');
            $row = $query->num_rows();
            if($row){
                $message = array(
                    'status'    => false,
                    'message'   => 'Данный номер телефона был использован при регистрации. Пожалуйста, введите другой.'
                );
                $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
            }else{
                $user_data = [
                    'login'     => $phone,
                    'password'  => $this->hash_pass($password),
                    'name'      => $name,
                    'type'      => 2
                ];

                /* Register driver*/

                $output = $this->user->register_user($user_data);
                if($output > 0 && !empty($output)){
                    //If registered successfully
                    $message = [
                        'status'    => true,
                        'message'   => "Вы успешно зарегистрированы"
                    ];
                    $this->response($message, REST_Controller::HTTP_OK);
                } else {

                    /* Error */

                    $message = [
                        'status'    => false,
                        'message'   => "Невозможно пройти регистрацию"
                    ];
                    $this->response($message, REST_Controller::HTTP_NOT_FOUND);
                }
            }
        }
    }

    public function web_log_out_get()
    {
        // $this->sess->destroy();
        delete_cookie("auth_id");
        redirect(base_url("index.php/main"), "refresh");
        $this->load->library('session');
        $this->session->sess_destroy();
        die();
    }

    /**
     * Users web register.
     *
     */
    public function web_register_post()
    {
        header("Access-Control-Allow-Origin: *");

        #Getting key from DB for hash
        $key = $this->user->get_keys();
        $key = $key[0]->key;

        #Form Validation
        $this->form_validation->set_rules('phone', 'Телефон', 'xss_clean|trim|required');
        $this->form_validation->set_rules('password', 'Пароль', 'xss_clean|trim|required|max_length[100]');
        $this->form_validation->set_rules('name', 'Имя', 'xss_clean|trim|max_length[100]');


        $phone = $this->input->post('phone');
        $password = $this->input->post('password');
        $name = $this->input->post('name');

        if($this->form_validation->run() == false)
        {
            $message = array(
                'status'    => false,
                'error'     => $this->form_validation->error_array(),
                'message'   => validation_errors()
            );
            redirect(base_url('/index.php/main'), 'refresh');
        }
        else
        {
            $this->db->where('login', $phone);
            $query = $this->db->get('users');
            $row = $query->num_rows();
            if($row){
                $message = array(
                    'status'    => false,
                    'message'   => 'Данный номер телефона был использован при регистрации. Пожалуйста, введите другой.'
                );
                redirect(base_url('/index.php/main'), 'refresh');
            }else{
                $user_data = [
                    'login'     => $phone,
                    'password'  => $this->hash_pass($password),
                    'name'      => $name,
                    'type'      => 2
                ];

                $output = $this->user->register_user($user_data);
                if($output > 0 && !empty($output)){
                    $this->load->library('session');

                    $this->session->set_userdata( array("name" => $output['name'],"user_id" => $output['user_id'], 'auth_soft' => $this->input->user_agent(),'auth_date' => time()));

                    $session = array("user_id" => $output['user_id'], 'auth_soft' => $this->input->user_agent(),'auth_date' => time());
                    $auth_id = $this->user->CreateSession($session);
                    $this->isAuth = true;
                    $user = $output['user_id'];
                    setcookie("auth_id", $auth_id, time()+3600*24*15, '/');

                    redirect(base_url('/index.php/main/user_info'), 'refresh');
                } else {

                    /* Error */
                    redirect(base_url('/index.php/main'), 'refresh');
                }
            }
        }
    }

    public function web_login_post(){

        $data = array('base_url' => base_url(), 'alert' => '');

        if($this->input->post("login") && $this->input->post("password"))
        {
            $this->load->model("user");

            $array = $this->user->auth($this->input->post("login"), $this->input->post("password"));
            if($array!=null && $array['type'] == 2)
            {
                $this->load->library('session');

                $this->session->set_userdata( array("name" => $array['name'],"user_id" => $array['user_id'], 'auth_soft' => $this->input->user_agent(),'auth_date' => time()));

                $session = array("user_id" => $array['user_id'], 'auth_soft' => $this->input->user_agent(),'auth_date' => time());
                $auth_id = $this->user->CreateSession($session);
                $this->isAuth = true;
                $user = $array['user_id'];
                setcookie("auth_id", $auth_id, time()+3600*24*15, '/');

                redirect(base_url('/index.php/main/user_info'), 'refresh');
            }
            else
            {
                redirect(base_url('/index.php/main/'), 'refresh');
                $data['alert'] = $this->createAlert('Ошибка Авторизации');
            }
        }

        $this->parser->parse('login', $data);
    }


    public function login_post()
    {
        header("Access-Control-Allow-Origin: *");

        #Getting key from DB for hash
        $key = $this->user->get_keys();
        $key = $key[0]->key;

        $headers    = $this->input->request_headers();
        $platform   = $headers['platform'] ?? 'android';

        if ($platform == 'IOS') {
            $data = json_decode(file_get_contents('php://input'), true);
            $_POST = $data;
        }

        $this->form_validation->set_rules('phone', 'Телефон', 'xss_clean|trim|required|max_length[20]');
        $this->form_validation->set_rules('password', 'Пароль', 'xss_clean|trim|required|max_length[100]');

        if($this->form_validation->run() == FALSE) {
            $message = array(
                'status'    => false,
                'error'     => $this->form_validation->error_array(),
                'message'   => validation_errors()
            );

            $this->response($message, 400);

        } else {

            $phone      = $this->input->post('phone');
            $password   = $this->input->post('password');
            $output     = $this->user->user_login($phone, $password, $key);
            $this->response($output, REST_Controller::HTTP_OK);

            if((!empty($output) && $output != FALSE))
            {
                // Load Authorization Token Library
                $this->load->library('Authorization_Token');

                $token_data['id'] = $output->user_id;
                $token_data['login'] = $output->login;
                $token_data['time'] = time();

                $user_token = $this->authorization_token->generateToken($token_data);

                $return_data = [
                    'user_id'   => $output->user_id,
                    'login'     => $output->login,
                    'name'      => $output->name,
                    'token'     => $user_token,
                ];

                //If authorized successfully
                $message = [
                    'status'    => true,
                    'data'      => [$return_data],
                    'message'   => "Пользователь успешно авторизован"
                ];
                $this->response($message, REST_Controller::HTTP_OK);
            } else
            {
                //Error
                $message = [
                    'status'    =>	 false,
                    'message'   => "Неправильный логин и(или) пароль"
                ];
                $this->response($message, 400);
            }
        }
    }

    public function update_user_post()
    {
        $this->load->library('session');
        $user = $this->getUser( $this->session->userdata('user_id'));

        if(isset($user))
            $userData['name'] = $this->input->post('name');
            $userData['email'] = $this->input->post('email');
            $userData['login'] = $this->input->post('login');
            $userData['birth_date'] = $this->input->post('birth_date');
            $userData['address'] = $this->input->post('address');
            $userData['gender'] = $this->input->post('gender');

        $this->db->where("user_id", $user['user_id']);
        $this->db->update("users", $userData);

        redirect(base_url('/index.php/main/user_info'), 'refresh');
    }

    public function update_user_password_post()
    {
        $this->load->library('session');
        $user = $this->getUser( $this->session->userdata('user_id'));

        if(isset($user))
            $userData['password'] = $this->hash_pass($this->input->post('password_confirm'));

        $this->db->where("user_id", $user['user_id']);
        $this->db->update("users", $userData);

        redirect(base_url('/index.php/main/user_info'), 'refresh');
    }

    public function getUser($user_id)
    {
        $array = array();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
        {
            $array = $row;
        }
        return $array;
    }

}