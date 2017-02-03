<?php

//session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends CI_Controller {

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');

// Load database
$this->load->model('login_database');
//$this->load->model('list_annonces');
}

// Show login page
public function index() {
$this->load->view('login_form');
}

// Show registration page
public function user_registration_show() {
$this->load->view('registration_form');
}

public function user_login_show() {
$this->load->view('login_form');
}

// Validate and store registration data in database
public function new_user_registration() {

// Check validation for user input in SignUp form
$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
$this->form_validation->set_rules('cont', 'Cont', 'trim|required|xss_clean');
$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('confirm', 'confirm', 'trim|required|xss_clean');
$this->form_validation->set_rules('sexe', 'Sexe', 'trim|required|xss_clean');

 $config['upload_path'] = './upload/';
     $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
     $config['max_size'] = 250;
     $this->load->library('upload', $config);
   
               if ( ! $this->upload->do_upload('photo') ==TRUE )
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('registration_form', $error);
                }
              

			

      if( $this->upload->do_upload('photo') ==TRUE){

          $upload_dataca = $this->upload->data();
          $image = $upload_dataca['file_name'];
         // $nomImage= $upload_dataca['file_name'];
if ($this->form_validation->run() == FALSE) {
$this->load->view('registration_form');
} else {
$data = array(
'nomUser' => $this->input->post('username'),
'emailUser' => $this->input->post('email_value'),
'contact' => $this->input->post('cont'),
'pseudo' => $this->input->post('username'),
'user_password' => $this->input->post('password'),
'sexe' => $this->input->post('sexe'),
'photo' => $image
);
$result = $this->login_database->registration_insert($data);
if ($result == TRUE) {
$data['message_display'] = 'Inscription reussie !';
$this->load->view('login_form', $data);
} else {
$data['message_display'] = 'nom utilisateur existe deja !';
$this->load->view('registration_form', $data);
}
}
}
}

// Check for user login process
public function user_login_process() {

$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
$this->load->view('admin_page');
}else{
$this->load->view('login_form');
}
} else {
$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);
$result = $this->login_database->login($data);
if ($result == TRUE) {

$username = $this->input->post('username');
$result = $this->login_database->read_user_information($username);
if ($result != false) {
$session_data = array(
'username' => $result[0]->nomUser,
'email' => $result[0]->emailUser,
'photo'  =>$result[0]->photo,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
$this->load->view('admin_page');
}
} else {
$data = array(
'error_message' => 'nom utilisateur ou mot de passe invalide'
);
$this->load->view('login_form', $data);
}
}
}

public function publier() {
$this->load->view('annonce');
}

public function compte() {
$this->load->view('admin_page');
}

public function contactez_nous() {

$this->form_validation->set_rules('name', 'nom', 'trim|required|xss_clean');
$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
$this->form_validation->set_rules('tel', 'tel', 'trim|required|xss_clean');
$this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
if ($this->form_validation->run() == FALSE) {
$this->load->view('welcome_message');
} else {

	$data = array(
'nom' => $this->input->post('name'),
'email' => $this->input->post('email'),
'tel' => $this->input->post('tel'),
'message' => $this->input->post('message')
);

	$result = $this->login_database->message_insert($data);

	if ($result == TRUE) {
$data['message_display'] = 'Message envoyer !';
$this->load->view('welcome_message', $data);
} else {
$data['message_display'] = 'Erreur envoie !';
$this->load->view('welcome_message', $data);
}

}
}

public function step() {

	$step = $_GET['step'];

	 switch ($step) {//on alterne sur les differents cas de figure
        case 1:

$this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean');
$this->form_validation->set_rules('lieu', 'lieu', 'trim|required|xss_clean');
$this->form_validation->set_rules('metier', 'metier', 'trim|required|xss_clean');

if ($this->form_validation->run() == FALSE) {
$this->load->view('annonce');
} else {

	$data = array(
'nom' => $this->input->post('nom'),
'lieu' => $this->input->post('lieu'),
'metier' => $this->input->post('metier')

);

	$result = $this->login_database->insert_annonce_step_1($data);

	if ($result == TRUE) {
$data['message_step'] = '1';
$this->load->view('annonce', $data);
} else {
$data['message_display'] = 'Erreur envoie !';
$this->load->view('publier', $data);
}
}
break;

       case 2://deuxieme etape 

$this->form_validation->set_rules('name', 'nom', 'trim|required|xss_clean');
$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
$this->form_validation->set_rules('tel', 'tel', 'trim|required|xss_clean');
$this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
if ($this->form_validation->run() == FALSE) {
$this->load->view('registration_form');
} else {

	$data = array(
'nom' => $this->input->post('name'),
'email' => $this->input->post('email'),
'tel' => $this->input->post('tel'),
'message' => $this->input->post('message')
);

	$result = $this->login_database->message_insert($data);

	if ($result == TRUE) {
$data['message_display'] = 'Message envoyer !';
$this->load->view('welcome_message', $data);
} else {
$data['message_display'] = 'Erreur envoie !';
$this->load->view('welcome_message', $data);
}

}
break;


    }


}

/*public function lister() {

    $data['annonce'] = $this->list_annonces->get_annonces();

    $this->load->view('list_annonce', $data);

    }*/



}

// Logout from admin page
/*public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Déconnexion reussie';
$this->load->view('login_form', $data);
}

}
*/



