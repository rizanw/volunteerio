<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
/**
* this class is to manage our gallery
* @package volunteer_portal
* 
*/
class Gallery_model extends CI_Model{

	/*
	*	this function is used to fetch an image
	*/
	function fetch_image($path){
		$this->load->helper('file');
		return get_filenames($path);
	}

	function insert_image($data){  
		$this->db->insert("gallery", $data);  
	}

}
?>