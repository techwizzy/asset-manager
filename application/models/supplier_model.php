<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Supplier_model extends CI_Model {
public function load_supplier($data){
//inserting new category
	$this->db->insert('supplier', $data);

}
public function display_Supplier(){
  	return $this->db->query("SELECT * from supplier ");


}
}