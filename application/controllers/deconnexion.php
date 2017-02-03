<?php

Class Deconnexion extends CI_Controller {

public function __construct() {
parent::__construct();

}
// Logout from admin page
public function index() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Déconnexion reussie';
$this->load->view('login_form', $data);
}

}

?>