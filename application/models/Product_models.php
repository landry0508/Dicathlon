<?php
class Product_model extends CI_Model {

    public function get_all_products() {
        $query = $this->db->get('produit');
        return $query->result_array();
    }
}
