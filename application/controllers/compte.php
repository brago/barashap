

<?php

Class Compte extends CI_Controller {

public function __construct() {
parent::__construct();

}
// Logout from admin page
public function index() {

$this->load->view('admin_page');
}

}

?>