<?php
class Welcome_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }


    public function getProducts() {
        $this->db->get('produit');
        return $query->result_array();
    }
}