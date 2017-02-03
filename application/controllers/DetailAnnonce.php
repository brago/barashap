<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailAnnonce extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
//        $this->is_logged_in();

//$this->load->model('list_annonce');
        $this->load->model('list_annonces');
        
    }
	
	  public function index(){

	  	$var = ($_GET['var']);
	  	if($var !=null)
       $result = $this->list_annonce->getDetailAnnonce($var);
		  
      //$data['query'] = $this->db->get('annonce');
       $this->load->view('single',$result);
    }
	
	
	
}

