<?php
 defined('BASEPATH') OR exit('No direct script access allowed');  

class Volunteer_controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('volunteer_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
	public function index(){
		$data["fetch_all"] = $this->volunteer_model->fetch_all();
        //load the view
        $data['main_content'] = 'volunteer_view';
        $this->load->view('include/template', $data);  
	}

    /**
    * validate a new data and insert data to database.
    * @return void
    */
	public function validate_volunteer(){

		echo "validation!";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules("nrp", "NRP", 'required');
//		$this->form_validation->set_rules("name", "Name", 'required');
//		$this->form_validation->set_rules("season", "Season", 'required');
		//insertion
		if($this->form_validation->run() === TRUE){
			if($this->input->post('add') == 'add_v'){
				echo "add";
					$this->do_upload();
					$this->add_data();
			}
			if($this->input->post('update' == 'update_v')){
				echo "update";
			}
		}else{
			$this->index();
			echo "gagal!";
		}
	}

	public function add_data(){
		global $foto_volunteer;

		$data = array(
			'volunteer_nrp' => $this->input->post("nrp"),
			'volunteer_name' => $this->input->post("name"),
			'volunteer_department' => $this->input->post("department"),
			'volunteer_season' => $this->input->post("season"),
			'volunteer_devision' => $this->input->post("devision"),
			'volunteer_angkatan' => $this->input->post("angkatan"),
			'volunteer_handphone' => $this->input->post("handphone"),
			'volunteer_line' => $this->input->post("line"),
			'volunteer_email' => $this->input->post("email"),
			'hometown' => $this->input->post("city"),
			'volunteer_birthday' => $this->input->post("datetime"),
			'volunteer_photo' => $foto_volunteer
		);
		$this->volunteer_model->add_volunteer($data);
//		redirect('volunteer_controller');
	}

	function do_upload(){
		global $foto_volunteer;

		$config['upload_path']	=	'./asset/volunteers';
		$config['allowed_types']	=	'jpeg|jpg|png';
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('v_photo')){
		    $error = array('error' => $this->upload->display_errors());
		    foreach($error as $key => $value){
			  echo $key." gagal di ". $value;
			}
		}else{
		    $data = array('upload_data' => $this->upload->data());
	   		$foto_volunteer = $data['upload_data']['file_name'];
		        echo "berhasil";
		}
	}

	public function delete(){
		$id = $this->input->post('del_id');
		$this->volunteer_model->delete($id);
       	redirect('volunteer_controller');
	}

	public function update_data(){
       $id = $this->input->post('up_id');  
       $data = array(
       		'nrp'			=> $this->input->post('nrp'),
       		'name'			=> $this->input->post('name'),
       		'department'	=> $this->input->post('department'),
       		'season'		=> $this->input->post('season')
       );         
       $this->volunteer_model->update_data($data,$id);
       redirect('volunteer_controller');
	}

	public function updated()  
	{  
	   $this->index();  
	}  

}


/*
CREATE TABLE `volunteer` (
  `volunteer_nrp` char(14),
  `volunteer_name` varchar(64) DEFAULT NULL,
  `volunteer_department` varchar(32) DEFAULT NULL,
  `volunteer_faculty` varchar(32) DEFAULT NULL,
  `volunteer_season` char(2) DEFAULT NULL,
  `volunteer_devision` varchar(12) DEFAULT NULL,
  `volunteer_angkatan` varchar(4) DEFAULT NULL,
  `volunteer_handphone` varchar(14) DEFAULT NULL,
  `volunteer_line` varchar(50) DEFAULT NULL,
  `volunteer_email` varchar(255) DEFAULT NULL,
  `hometown` varchar(50) DEFAULT NULL,
  `volunteer_birthday` date DEFAULT NULL,
  `volunteer_photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`volunteer_nrp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

*/
/*
CREATE TABLE `volunteer` (
  `volunteer_name` varchar(64) DEFAULT NULL,
  `volunteer_season` char(2) DEFAULT NULL,
  `volunteer_email` varchar(255) DEFAULT NULL,
  `volunteer_handphone` varchar(14) DEFAULT NULL,
  `volunteer_devision` varchar(12) DEFAULT NULL,
  `volunteer_nrp` varchar(14),
  `volunteer_department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`volunteer_nrp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOAD DATA INFILE 'D:\\volunteer-fix.csv' INTO TABLE volunteer FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';

BULK 
INSERT Volunteer
FROM 'D:\\Volunteer.csv'
WITH
(
FIELDTERMINATOR = ',',
ROWTERMINATOR = '\n'
)
GO
SELECT *FROM Volunteer

*/
?>