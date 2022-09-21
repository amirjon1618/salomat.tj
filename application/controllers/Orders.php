<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH. 'libraries/REST_Controller.php';

class Orders extends REST_Controller
{
    /**
     * Construction
     */
    public function __construct(){

        parent::__construct();

        $this->load->helper('security');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('order');

    }

    /**
     * Get orders list
     *
     * @return void
     */
    public function index_get()
    {

        $user_id = $this->input->get('user_id');


        $this->response($this->order->user_orders($user_id), REST_Controller::HTTP_OK);

    }

    /**
     * Store Order
     *
     * @return void
     */
    public function index_post()
    {
        if ($this->input->post("products")) {
            $array = $this->input->post();
            $array['code'] = null;
            if (!is_numeric($array["delivery_id"])) {
                $array["delivery_id"] = 1;
            }
            $res = $this->order->add($array);
            $this->order->save_user_order_status_change($array['user_id'], $res['order_id'], 1, 1, $this->input->post("comment"));

            echo $res['order_id'];
        }
    }
}