<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH. 'libraries/REST_Controller.php';

class Search extends REST_Controller
{
    /**
     * Construction
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('security');
        $this->load->model('product');
        $this->load->database();
    }

    /**
     *Search with param
     *
     */
    public function with_price_get()
    {
        $res = $this->product->search_for_prod(
            $this->input->get("srch_pr_inp"),
            $this->input->get("min_price"),
            $this->input->get("max_price")
        );

        $this->response($res, REST_Controller::HTTP_OK);
    }

    /**
     * Search without param
     *
     */
    public function index_get()
    {
        $data['srch_inp'] = $this->input->get("srch_pr_inp");
        $res = $this->product->search_for_prod(
            $this->input->get("srch_pr_inp"),2
        );
        if (isset($res['srch_prod_max_pr'])) {
            $data['srch_prod_max_price'] = $res['srch_prod_max_pr'];
        } else {
            $data['srch_prod_max_price'] = 9999;
        }

        $data = [
            'max' => $data,
            'blogs' => $res
        ];

        $this->response($data, REST_Controller::HTTP_OK);
    }
}