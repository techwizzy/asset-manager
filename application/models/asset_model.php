<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Asset_model extends CI_Model {
public function load_asset($data){
//inserting new asset
	$this->db->insert('asset_records', $data);

}

public function display_assets(){
  	return $this->db->query("SELECT * from asset_records");


}

}