<?php
class Utilisateur_model extends CI_Model {


    public function __construct(){
        $this->load->database();
    }




    public function authentifier_utilisateur($login, $password) {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('login', $login);
        $this->db->where('password', ($password));

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
