<?php
 defined('BASEPATH') OR exit('No direct script access allowed');  

class Volunteer_model extends CI_Model{
	
	function add_volunteer($data){
		$this->db->insert("volunteer", $data);
		return true;
	}

	function fetch_all(){
		//get by id
		$query = $this->db->get("volunteer");
		//get by nrp
//		$query = $this->db->query("SELECT * FROM volunteer ORDER BY nrp DESC");
		return $query;
	}

	function fetch_devision($devi){
		//get by id
		$this->db->where('volunteer_devision', $devi);
		$query = $this->db->get("volunteer");
		//get by nrp
//		$query = $this->db->query("SELECT * FROM volunteer ORDER BY nrp DESC");
		return $query;
	}

	function fetch_row($id){
		//get by nrp
		$this->db->where("id", $id);
		$query = $this->db->get("volunteer");
		return $query;
	}
	
	function delete($id){
		$this->db->where('volunteer_nrp', $id);
		$this->db->delete('volunteer');
	}
	
	function update_data($data, $id){  
	   $this->db->where("id", $id);  
	   $this->db->update("volunteer", $data);
	   return true;
	} 
}
?>