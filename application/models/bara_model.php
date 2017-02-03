<?php

class bara_model extends CI_Model
{
	private $table = 'annonce';
	
	public function ajouter_annonce($titre, $message)
	{
		if(!is_string($titre) OR !is_string($message) OR empty($titre) OR empty($message))
		{
			return false;
		}
		
		return $this->db->set(array('titre' => $titre,
					    'message' => $message))
				
				->insert($this->table);
	}
	
	public function count()
	{
		return $this->db->count_all($this->table);
	}
	
	public function get_annonce($nb, $debut = 0)
	{
		if(!is_integer($nb) OR $nb < 1 OR !is_integer($debut) OR $debut < 0)
		{
			return false;
		}
		
		return $this->db->select('`idAnnonce`, `titreAnnonce`, `descAnnonce`', false)
				->from($this->table)
				->order_by('idAnnonce', 'desc')
				->limit($nb, $debut)
				->get()
				->result();
	}
}

/* End of file livreor_model.php */
/* Location: ./application/models/livreor_model.php */