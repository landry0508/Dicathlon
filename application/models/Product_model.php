<?php
class Product_model extends CI_Model {
    public function getProductDetails($productId) {
        $query = $this->db->get_where('produit', array('id' => $productId));
        return $query->row_array(); // Assuming you want a single row of data
    }
}

