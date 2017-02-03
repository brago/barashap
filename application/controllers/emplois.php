<?php
Class Emplois extends CI_Controller {

  public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');

// Load database
$this->load->model('emploi_model');

//$this->load->model('list_annonces');
}
	
	public function index() {
$this->load->view('formulaire');
}
public function register(){

$this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean');
$this->form_validation->set_rules('prenom', 'prenom', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
$this->form_validation->set_rules('age', 'age', 'trim|required|xss_clean');
$this->form_validation->set_rules('ville', 'ville', 'trim|required|xss_clean');
$this->form_validation->set_rules('metier', 'metier', 'trim|required|xss_clean');
$this->form_validation->set_rules('apropos', 'apropos', 'trim|required|xss_clean');
$this->form_validation->set_rules('contact1', 'contact1', 'trim|required|xss_clean');
$this->form_validation->set_rules('contact2', 'contact2', 'trim|required|xss_clean');

  $config['upload_path'] = './upload/';
     $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
     $config['max_size'] = 250;
     $this->load->library('upload', $config);
   
               if ( ! $this->upload->do_upload('photo') ==TRUE )
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('formulaire', $error);
                }
               

			

      if( $this->upload->do_upload('photo') ==TRUE){

          $upload_dataca = $this->upload->data();
          $image = $upload_dataca['file_name'];
         // $nomImage= $upload_dataca['file_name'];


 if ($this->form_validation->run() == FALSE) {
  $data['message_display'] = 'Echec  !';
    $this->load->view('formulaire', $data);
} else {
          $data = array(

          'nom' => $this ->input ->post('nom'),
          'prenom'=> $this -> input ->post('prenoms'),
          'password' => $this -> input ->post('password'),
          'age' => $this -> input ->post('age'),
          'ville' => $this -> input ->post('ville'),
          'metier' => $this -> input -> post('metier'),
          'apropos' => $this ->input ->post('apropos'),
          'contact1' => $this -> input -> post('contact1'),
          'contact2' => $this ->input ->post('contact2'),
          'photo' => $image,
          );
          $result = $this->emploi_model->ad_insert_emploi($data);
if ($result == TRUE) {
$data['message_display'] = 'Inscription avec succes ! !';
$this->load->view('formulaire', $data);
} else {
$data['message_display'] = 'Echec de l\'inscription !';
$this->load->view('formulaire', $data);
}

      }


}

}
}