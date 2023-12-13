<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('utilisateur_model');
    }

    public function index() {
        $this->load->view('connexion');
    }

    public function authentifier() {
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $utilisateur = $this->utilisateur_model->authentifier_utilisateur($login, $password);



        if ($utilisateur) {
            // Authentification réussie
            $this->session->set_userdata('utilisateur_id', $utilisateur->id);
            $this->load->view('accueil'); 
        } else {
            // Échec de l'authentification
            $this->load->view('connexion'); 
        }
    }
}
