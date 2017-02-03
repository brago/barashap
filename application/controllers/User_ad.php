<?php
 Class User_ad extends CI_Controller {
	

	public function __construct() {
parent::__construct();

$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');
 $this->load->helper(array('form', 'url'));
$this->load->model('annonce_model');
//$this->load->library('upload');
}

   public function new_annonce(){

       $this->form_validation->set_rules('titre', 'Titre', 'trim|required|xss_clean');
       $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
       $this->form_validation->set_rules('categorie', 'Categorie', 'trim|required|xss_clean');
       $this->form_validation->set_rules('budjet', 'Budjet', 'trim|required|xss_clean');
       $this->form_validation->set_rules('type', 'Type', 'trim|required|xss_clean');

          
     $config['upload_path'] = './upload/';
     $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
     $config['max_size'] = 250;
     $this->load->library('upload', $config);
   
               if ( ! $this->upload->do_upload('cahier') ==TRUE )
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('annonce', $error);
                }
                else
                {

			

      if( $this->upload->do_upload('image') ==TRUE){

          $upload_dataca = $this->upload->data();
          $image = $upload_dataca['file_name'];
         // $nomImage= $upload_dataca['file_name'];


      
                 // $userdata = ;
                 // $data['img'] = base_url().'/upload/'.$file_data['file_name'];
                  
  if ($this->form_validation->run() == FALSE) {
  $data['message_display'] = 'Echec  !';
    $this->load->view('annonce', $data);
} else {
//$upload_data = $this->upload->data();

//$cahier = $upload_data['file_name'];
$data = array(
'titreAnnonce' => $this->input->post('titre'),
'descAnnonce' => $this->input->post('description'),
'cat' => $this->input->post('categorie'),
'budjet' => $this->input->post('budjet'),
// 'cahier_charge' => $image ,
'type_annonce' => $this->input->post('type'),
//'titreAnnonce' => $this->input->post('titre'),
//'titreAnnonce' => $this->input->post('titre'),
'cahier_charge' =>$image,
'image'=>$image,
//$this->db->set('user_avatar', $upload_data['file_name']);
);

$result = $this->annonce_model->ad_insert($data);
if ($result == TRUE) {
$data['message_display'] = 'Annonce bien ajoutée !';
$this->load->view('annonce', $data);
} else {
$data['message_display'] = 'Echec de l\'ajout de l\'annonce !';
$this->load->view('annonce', $data);
}


}
}
                      
                }


}
}
