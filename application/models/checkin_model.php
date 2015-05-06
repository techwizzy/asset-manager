<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Checkin_model extends CI_Model {
public function load_checkin($data){
//inserting new category
	$this->db->insert('checkin', $data);

}



}