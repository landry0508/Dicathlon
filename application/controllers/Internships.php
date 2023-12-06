<?php
class Internships extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->model('internships_model');
}
public function index(){
$data['produit_list']=$this->internships_model->get_produit();
}
}
?>