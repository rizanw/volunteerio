<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class Gallery_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->model('gallery_model');
		$data['images'] = $this->gallery_model->fetch_image(FCPATH.'asset/uploads');

        //load the view
        $data['main_content'] = 'gallery_view';
        $this->load->view('include/template', $data);  
	}

	function image_upload(){  
	   $data['title'] = "Upload Image to Gallery";  
	   $this->load->model('main_model');  
	   $data["image_data"] = $this->main_model->fetch_image();  
	   $this->load->view('image_upload', $data);  
	} 

	function do_upload(){
		$config['upload_path']	=	'./asset/uploads';
		$config['allowed_types']	=	'jpg|png';

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('userfile')){
		    $error = array('error' => $this->upload->display_errors());
		    foreach($error as $key => $value){
			  echo $key." has the value". $value;
			}
		}else{
		    $data = array('upload_data' => $this->upload->data());
		        echo "berhasil";
		}
	}

	function ajax_upload(){
		if(isset($_FILES["image_file"]["name"])){
			$config['upload_path'] = './asset/uploads';  
	        $config['allowed_types'] = 'jpg|jpeg|png';

	        $this->load->library('upload', $config);  
	        
	        if(!$this->upload->do_upload('userfile')){  
				echo $this->upload->display_errors();  
	        }else{  
				$data = $this->upload->data();  
				$config['image_library'] = 'gd2';  
				$config['source_image'] = './asset/uploads/'.$data["file_name"];  
				$config['create_thumb'] = FALSE;  
				$config['maintain_ratio'] = FALSE;  
				$config['quality'] = '70%';  
				$config['width'] = 200;  
				$config['height'] = 200;  
				$config['new_image'] = './asset/uploads/compressed'.$data["file_name"];  
				$this->load->library('image_lib', $config);  
				$this->image_lib->resize();
				$this->load->model('Gallery_model');
				$image_data = array(
					'name'          =>     $data["file_name"]
				);  
				$this->main_model->insert_image($image_data);  
				echo $this->main_model->fetch_image();  
	             //echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
	        }  
	   }  
	}  



}


/*
CREATE TABLE `gallery` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(14),
  `title` varchar(64) DEFAULT NULL,
  `desc` varchar(32) DEFAULT NULL,
  `season` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/
/*
hospit
id
medfo*/
?>