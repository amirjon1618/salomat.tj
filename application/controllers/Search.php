<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH. 'libraries/REST_Controller.php';

class Search extends REST_Controller {

    /**
     * Construction
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('security');
        $this->load->model('user');
        $this->load->model('favorite');
        $this->load->model('category');
        $this->load->model('advertisement');
        $this->load->model('product');
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function with_price_get()
    {

        $res = $this->product->search_for_prod(
            $this->input->get("srch_pr_inp"),
            $this->input->get("min_price"),
            $this->input->get("max_price")
        )->orderBy('review_count');

        $this->response($res, REST_Controller::HTTP_OK);
    }
}