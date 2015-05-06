<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Expendable_model extends CI_Model {
public function load_expendables($data){
//inserting new category
	$this->db->insert('expendables', $data);

}

public function display_expendables(){
  	return $this->db->query("SELECT * from expendables");


}

}