<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct() {
        parent::__construct();
//        $this->is_logged_in();

        //$this->load->model('list_annonce');
        //$this->load->model('List_annonces');
        
    }
	
	

	public function index()
	{
		 //$this->load->helper('url');
		// $result = $this->list_annonce->get_annonces();
		//$data['query'] = $this->db->get('annonce');
		 //$this->db->limit(3);
		//$this->load->view('welcome_message', $result);
		$this->load->view('welcome_message');
		//echo"Bienvenu sur BARASHAP";
	}
	
	public function connexion(){
		
		$this->load->view('login_view');
		
	}
	
	public function inscription(){
		
		
		$this->load->view('user_registration_view');
	}

}
