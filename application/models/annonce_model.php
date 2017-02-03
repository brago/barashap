<?php

Class annonce_model extends CI_Model {

	//insert annonce

public function ad_insert($data) {
// Query to check whether username already exist or not
$condition = "titreAnnonce =" . "'" . $data['titreAnnonce'] . "'";
$this->db->select('*');
$this->db->from('annonce');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('annonce', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

//lister les annonces 

public function read_user_information($username) {

$condition = "nomUser =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('user');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}


	}