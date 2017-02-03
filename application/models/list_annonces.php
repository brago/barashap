<?php


//Class List_annonce extends CI_Model {  

Class List_annonces extends CI_Model {
public function get_annonces(){
	$this->db->from("annonce");
	$this->db->limit(3);
    $qe=$this->db->get();
    if($qe->num_rows()>0)  {
      foreach($qe->result() as $row)
       {
         $data[] = $row;
       }
         return $data;
     }
    }
public function getDetailAnnonce($var) {

	$condition = "idAnnonce =" . "'" . $var . "'";
    $this->db->select('*');
    $this->db->from('annonce');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}


	
}




}
