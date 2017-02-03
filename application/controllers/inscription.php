<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inscription extends CI_Controller {
	
    public function  __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
 
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $this->output->enable_profiler(true);
 
        $this->form_validation->set_rules('nom', 'Nom', 'required|maxlenght[50]');
        $this->form_validation->set_rules('prenom', 'Prénom', 'required|maxlenght[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[T_USERS_USR.MAIL_USR]');
        $this->form_validation->set_rules('password', 'Mot de passe', 'required|trim|min_length[6]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Mot de passe', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
         
 
        if ($this->form_validation->run() === TRUE)
        {
 
            $this->load->model('user_model');
 
            $data['query'] = $this->db->query('SELECT * FROM users');
            $this->load->view('users_view',$data);
 
            $userId = $this->user_model->insert_membre();
 
            // si enregistrement ok
            if($userId > 0)
            {
                 
                // ajout session
                //$data = array('user_id'=>$userId);
                //$this->session->set_userdata($data);
 
                //redirection
                redirect('success');
 
            }
            else
            {
                // gestion erreur enregistrement DB
               redirect('bad');
            }
        }
        else
        {
 
         
        $this->load->view('inscription');
         
                   
        }
         
    }
public function inscription(){
	
	
}
}
?>