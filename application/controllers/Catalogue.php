<?php
class Catalogue extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index() {
        $data['page'] = $this->product_model->get_all_products();

        $this->load->view('catalogue', $data);
    }
}
