<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class License_model extends CI_Model {
public function load_licenses($data){
//inserting new category
	$this->db->insert('licenses', $data);

}


public function display_licenses(){
  	return $this->db->query("SELECT * from licenses ");


}

}