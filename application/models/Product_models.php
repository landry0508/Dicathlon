<?php
public function getDescription($slug = FALSE){
		$this->db->select('*');
		$this->db->from('produit');
		$this->db->where('id' , $slug);
		$query = $this->db->get();

		return $query->result_array();
	}
?>