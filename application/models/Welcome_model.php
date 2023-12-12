<?php
class Welcome_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }


    public function getProducts() {
        $query = $this->db->get('produit');
        return $query->result_array();
    }
}