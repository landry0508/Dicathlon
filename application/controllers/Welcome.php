<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
  {
    	parent::__construct();
        $this->load->model('Welcome_model');
  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$this->load->view('header');
		$this->load->view('accueil');
		$this->load->view('footer');

	}

	public function catalogue(){
		$page_data['page_title'] = "Catalogue";

		$page_data['catalogue']=$this->Welcome_model->getProducts();

		$page_data['page'] = $page_data['catalogue'];

		$this->load->view('header');
		$this->load->view('catalogue', $page_data);
		// $this->load->view('catalogue');
		$this->load->view('footer');
	}

	public function produit (){
		$page_data['page_title'] = "Produit";
		$page_data['page'] = 'produit';
		$this->load->view('produit', $page_data);
	}

	public function achat (){
		$page_data['page_title'] = "Achat";
		$page_data['page'] = 'achat';
		$this->load->view('achat', $page_data);
	}

	

}
