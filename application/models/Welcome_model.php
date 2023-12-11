<?php
class Welcome_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }


    public function getProducts() {
        $this->db->select('*');
        $this->db->from('produit');
        $query = $this->db->get();

        return $query->result_array();
    }
}