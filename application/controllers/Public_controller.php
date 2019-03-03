<?php
 defined('BASEPATH') OR exit('No direct script access allowed');  

/**
* this class is for public viewer
*/

class Public_controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index(){
		$this->load->view('public/header');
		$this->load->view('public/nav');
		//fetch gallery foto
	    $this->load->model('gallery_model');
        $data['images'] = $this->gallery_model->fetch_image(FCPATH.'asset/uploads/gallery');
        //fetch data volunteer
        $this->load->model('volunteer_model');
        $f_hospit = 'D001';
        $f_id = 'D002';
        $f_medfo = 'D003';
		$data["fetch_hospit"] = $this->volunteer_model->fetch_devision($f_hospit);
		$data["fetch_idd"] = $this->volunteer_model->fetch_devision($f_id);
		$data["fetch_medfo"] = $this->volunteer_model->fetch_devision($f_medfo);

		//untuk ngambil gambar di folder uploads
		$this->load->view('public/main', $data);
		$this->load->view('public/footer');
	}

}

?>
