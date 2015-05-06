<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Brand_model extends CI_Model {
public function load_brand($data){
//inserting new category
	$this->db->insert('model', $data);

}

public function display_brand()
{
  	return $this->db->query("SELECT * from model ");


}

}