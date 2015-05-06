<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
public function insert_users($user_data){
//inserting new category
	$this->db->insert('users', $user_data);

}
public function insert_employee_data($data){
//add new employee record
	$this->db->insert('employee', $data);

}
public function display_system_users(){

  	return $this->db->query("SELECT * from users ");
}

public function get_all_employees(){
  return $this->db->query("SELECT * from employee ");
}
public function update_employee_data($data,$id){
	 $this->db->where('Employee_no', $id);
	 $this->db->update('employee', $data);
}
public function check_user_exist($uname){
 $query=$this->db->query("SELECT * from users WHERE Username='$uname' ");
 if ($query->num_rows() > 0) {
          return TRUE;
        } else {
          return FALSE;
        }
}public function get_this_user($id){
	return $this->db->query("SELECT * from employee where Employee_no='$id' ");
}
}