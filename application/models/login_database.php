<?php

Class Login_Database extends CI_Model {

// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
$condition = "nomUser =" . "'" . $data['nomUser'] . "'";
$this->db->select('*');
$this->db->from('user');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('user', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

// Read data using username and password
public function login($data) {

$condition = "nomUser =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('user');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}

// Read data from database to show data in admin page
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

public function message_insert($data) {

// Query to check whether username already exist or not
$condition = "nom =" . "'" . $data['nom'] . "'";
$this->db->select('*');
$this->db->from('usercontacter');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('usercontacter', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}


public function insert_annonce_step_1($data) {

// Query to check whether username already exist or not
$condition = "nom =" . "'" . $data['nom'] . "'";
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

}

?>