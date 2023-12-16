<?php
class Products extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index() {
        $data['products'] = $this->Product_model->get_products();
        $this->load->view('products_view', $data);
    }
}
