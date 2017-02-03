<?php

Class emploi_model extends CI_Model {

	//insert annonce

public function ad_insert_emploi($data) {
// Query to check whether name already exist or not
$condition = "nom =" . "'" . $data['nom'] . "'";
$this->db->select('*');
$this->db->from('emploi');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('emploi', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}
}