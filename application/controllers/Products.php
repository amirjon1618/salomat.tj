<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH. 'libraries/REST_Controller.php';

class Products extends REST_Controller {

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
        $this->load->model('user');
        $this->load->model('category');
        $this->load->model('slider');
        $this->load->model('page');
        $this->load->model('rating');
        $this->load->model('indication');
        $this->load->model('advertisement');
        $this->load->model('ActiveSubstance');
        $this->load->model('blog');
        $this->load->model('tag');
        $this->load->model('sms');
        $this->load->model('delivery');
    }

    /**
     * Display a listing of the Products.
     *
     */
    public function index_get()
    {
        header("Access-Control-Allow-Origin: *");

        $this->load->library('Authorization_Token');
        $data['categories'] = $this->category->get_all();
        $data['main_slider'] = $this->slider->get_all('normal');
        $data['ad_mini'] = $this->advertisement->get_all('mini_pic');
        $data['prods_of_the_day'] = $this->product->get_prods_by_slider_type('product_of_the_day');

        $isFromMyBabilon = $this->input->get('from');
        if ($isFromMyBabilon == 'babilon') {
            $babilonUser = $this->input->get('phone');
            $bUserInfo = array(
                'from' => $isFromMyBabilon,
                'phone' => $babilonUser
            );
            setcookie($this->bUserInfoName, json_encode($bUserInfo));
        }

        $categories = $this->category->get_all();
        $j = 0;
        $array = array();
        for ($i = 0; $i < sizeof($categories); $i++) {
            if ($categories[$i]['category_in_main'] == 1 && $j < 3) {
                $array[$j]['categ'] = $categories[$i];
                $array[$j]['categ_slider'] = $this->slider->get_by_slider_category($categories[$i]['id']);
                $array[$j]['categ_prods'] = $this->product->get_prods_in_categ($categories[$i]['id']);
                $j++;
            }
        }
        $data['meta_social_image'] = base_url('salomat_apteka.jpg');
        $data['meta_social_url'] = base_url();
        $data['meta_social_title'] = 'Интернет аптека Salomat.tj, купить онлайн лекарственные препараты и товары для здоровья';
        $data['meta_social_desc'] = 'Удобный поиск лекарств, можно заказать любые препараты недорого по выгодным ценам. Удобный каталог лекарств, инструкций и советы врачей! ☎ 9990 Salomat.tj';
        $data['title'] = 'Интернет аптека Salomat.tj, купить онлайн лекарственные препараты и товары для здоровья';
        $data['categories_for_main_page'] = $array;
        $data['footer'] = $this->parser->parse('parts/footer', $data, TRUE);
        $this->parser->parse('template', $data);

        $this->response($data, REST_Controller::HTTP_OK);

    }

    public function user_orders_get($id)
    {
        $this->db->select('*');
        $this->db->from('user_order');
        $this->db->order_by("order_id", "desc");
        $this->db->where('user_id', $id);
        $this->db->join('order', 'user_order.order_id = order.id');
        $query = $this->db->get();
        $order = $query->result();
        $data = array();
        foreach ( $order as $item => $value) {
            $this->db->select('*');
            $this->db->from('product_order');
            $this->db->where('order_id', $value->id);
            $this->db->join('product', 'product_order.product_id = product.id');
            $product = $this->db->get();
            if ($product){
                $this->db->select('delivery_price');
                $this->db->from('delivery');
                $this->db->where('delivery_id', $value->delivery_type);
                $delivery = $this->db->get();
            }
            if ($product){
                $this->db->select('status_text');
                $this->db->from('status');
                $this->db->where('id', $value->status_id);
                $status = $this->db->get();
            }
            $data [] = [
                'order' => $value,
                'status' => $status->result(),
                'delivery' => $delivery->result(),
                'products' => $product->result(),
            ];
        }

        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function order_products_get($id)
    {
        $this->db->select('*');
        $this->db->from('product_order');
        $this->db->where('order_id', $id);
        $this->db->join('product', 'product_order.product_id = product.id');
        $query = $this->db->get();
        $this->response($query->result(), REST_Controller::HTTP_OK);
    }
}