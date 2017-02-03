

<?php


Class User_ad extends CI_Controller {
	

	public function __construct() {
	parent::__construct();
	
	}
	
	public function sendMail(){
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
       $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
       $this->form_validation->set_rules('tel', 'tel', 'trim|required|xss_clean');
       $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		
		
if ($this->form_validation->run() == FALSE) 
{
 $destinataire = 'bbarashap@gmail.com';
  $email = htmlentities($_POST['email']);
  if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',str_replace('&amp;','&',$email)))
 {
  $message = stripslashes($_POST['message']);

   $headers = "From: <".$email.">\n";
  $headers .= "Reply-To: ".$email."\n";
  $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
  if(mail($destinataire,$sujet,$message,$headers))
  {
  echo "<strong>Votre message a bien &eacute;t&eacute; envoy&eacute;.</strong>";
  }
 else
  {
  echo "<strong style=\"color:#ff0000;\">Une erreur c'est produite lors de l'envois du message.</strong> <meta http-equiv=\"refresh\" content=\"5; URL=http://www.manouvelleadresse.com\">";
 }
   }
  else
  {
  echo "<strong style=\"color:#ff0000;\">L'email que vous avez entr&eacute; est invalide.</strong> <meta http-equiv=\"refresh\" content=\"5; URL=http://www.manouvelleadresse.com\">";
 }
}
else
{
	
	
}
}
}
?>