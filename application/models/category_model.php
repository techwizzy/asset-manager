<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category_model extends CI_Model {
public function load_category($data){
//inserting new asset
	$this->db->insert('category', $data);

}

public function display_category(){
  	return $this->db->query("SELECT * from category");


}

}