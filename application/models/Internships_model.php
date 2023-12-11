<?php
    class Internships_model extends CI_Model{
        public function __construct(){
        parent::__construct();
        $this->load->database();
        }
        public function get_produit(){
            $query=$this->db->get('	produit');
            return $query->result_array();
            }
            
    }

class Product_model extends CI_Model {
    public function get_products() {
        $query = $this->db->get('dicathlon'); // Remplacez 'votre_table' par le nom de votre table
        return $query->result();
    }
}

?>