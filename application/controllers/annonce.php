<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class annonce extends CI_Controller{
	const NB_ANNONCE_PAR_PAGE = 15;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('bara_model', 'baraManager');
	}
	
// ------------------------------------------------------------------------
	
	public function index($g_nb_annonce = 1)
	{
		$this->voir($g_nb_annonce);
	}
	
// ------------------------------------------------------------------------
	


public function voir($g_nb_annonce = 1)
{
	$this->load->library('pagination');
	
	$data = array();
	
	//	Récupération du nombre total de messages sauvegardés dans la base de données
	$nb_annonce_total = $this->baraManager->count();
	
	//	On vérifie la cohérence de la variable $_GET
	if($g_nb_annonce > 1)
	{
		//	La variable $_GET semblent être correcte. On doit maintenant
		//	vérifier s'il y a bien assez de commentaires dans la base de données.
		if($g_nb_annonce <= $nb_annonce_total)
		{
			//	Il y a assez de commentaires dans la base de données.
			//	La variable $_GET est donc cohérente.
			
			$nb_annonce = intval($g_nb_annonce);
		}
		else
		{
			//	Il n'y pas assez de messages dans la base de données.
			
			$nb_anonce = 1;
		}
	}
	else
	{
		//	La variable $_GET "nb_commentaire" est erronée. On lui donne une
		//	valeur par défaut.
		
		$nb_annonce = 1;
	}
	
	//	Mise en place de la pagination
	$this->pagination->initialize(array('base_url' => base_url() . 'index.php/annonce/voir/',
					    'total_rows' => $nb_annonce_total,
					    'per_page' => self::NB_ANNONCE_PAR_PAGE)); 
	
	$data['pagination'] = $this->pagination->create_links();
	$data['nb_annonce'] = $nb_annonce_total;
	
	//	Maintenant que l'on connaît le numéro du commentaire, on peut lancer
	//	la requête récupérant les commentaires dans la base de données.
	$data['messages'] = $this->baraManager->get_annonce(self::NB_ANNONCE_PAR_PAGE, $nb_annonce-1);
	
	//	On charge la vue
	$this->load->view('afficher_commentaires', $data);
}
	
// ------------------------------------------------------------------------
	


public function ecrire()
{
	$this->load->library('form_validation');
	
	//	Cette méthode permet de changer les délimiteurs par défaut des messages d'erreur (<p></p>).
	$this->form_validation->set_error_delimiters('<p class="form_erreur">', '</p>');
	
	//	Mise en place des règles de validation du formulaire
	//	Nombre de caractères : [3,25] pour le pseudo et [3,3000] pour le commentaire
	//	Uniquement des caractères alphanumériques, des tirets et des underscores pour le pseudo
	$this->form_validation->set_rules('titre',  '"Titre"',  'trim|required|min_length[3]|max_length[25]|alpha_dash');
	$this->form_validation->set_rules('desc', '"Description"', 'trim|required|min_length[3]|max_length[3000]');
	
	if($this->form_validation->run())
	{
		//	Nous disposons d'un pseudo et d'un commentaire sous une bonne forme
		
		//	Sauvegarde du commentaire dans la base de données
		$this->baraManager->ajouter_annonce($this->input->post('pseudo'),
							   $this->input->post('contenu'));
		
		//	Affichage de la confirmation
		$this->load->view('confirmation');
	}
	else
	{
		$this->load->view('ecrire_commentaire');
	}
}
}

?>


