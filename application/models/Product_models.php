<?php
class Product_model extends CI_Model {
    public function get_products() {
        $query = $this->db->get('dicathlon');
        return $query->result();
    }
}