<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH. 'libraries/REST_Controller.php';

class PromoCode extends REST_Controller
{
    /**
     * Construction
     */
    public function __construct(){

        parent::__construct();

        $this->load->helper('security');
        $this->load->model('product');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('cookie');
        $this->load->helper('url');
        $this->load->model('PromoCode');
        $this->load->model('order');

    }

    /**
     * List PromoCode
     *
     * @return void
     */
    public function index_get()
    {
        if ($this->input->get("promo_code")) {

            $data = $this->PromoCode->get_promo_code($this->input->get("promo_code"));

            $message = [
                'status'    => true,
                'data'      => $data[0]
            ];

            $this->response($message, REST_Controller::HTTP_OK);
        } else {

            $message = [
                'status' => false
            ];

            $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}