<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Accesory_model extends CI_Model {
public function load_accesory($data){
//inserting new category
	$this->db->insert('accesory', $data);

}

public function display_accesory(){
  	return $this->db->query("SELECT * from accesory ");


}

}