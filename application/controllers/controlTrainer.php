
<?php

class ControlTrainer extends CI_Controller{
	public function newTrainer(){
		//form validation...........................................
		$this->load->library('form_validation');
			
	
		$this->form_validation->set_rules('address','address','required',
		array('required'=>'please clearify address'));

		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tbltrainer.email]|strtolower');
	 	
	    $this->form_validation->set_rules('contact','Contact','required|regex_match[/^[0-9]{10}$/]');

	    $this->form_validation->set_rules('uname', 'username', 'required|trim|is_unique[tbltrainer.uname]|strtolower');
	 	
	    $this->form_validation->set_rules('pword', 'Password', 'required|trim|min_length[8]|alpha_numeric');
	    $this->form_validation->set_rules('repword', 'Confirm Password', 'required|trim|matches[pword]');

	

	if($this->form_validation->run()==false){
		
		echo validation_errors();
				// .................................................................................

	}else{
		//for uploading images
		$config['upload_path']="assets/images/trainers";
		$config['allowed_types']  = 'gif|jpg|png';
		$config['max-width']="100";
		$config['max-height']="100";

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }
		// $this->upload->do_upload('userfile');
		$data=array('upload_data'=>$this->upload->data());
//------------------------------------
$tname=$this->input->post('tname');
$image=$data['upload_data']['file_name'];
$address=$this->input->post('address');
$email=$this->input->post('email');
$contact=$this->input->post('contact');
$uname=$this->input->post('uname');
$pword=$this->input->post('pword');
$dob=$this->input->post('dob');
$jdate=$this->input->post('jdate');
$package=$this->input->post('package');


$this->load->model('modelTrainer');
$this->modelTrainer->saveTrainer($tname,$image,$address,$email,$contact,$uname,$pword,$dob,$jdate,$package);

// $data['insertmsg']="data insert successfully
$this->session->set_flashData('inserttrainermsg','data sucessfully insert in table trainer');
redirect('controlWelcome/goToTrainerRegistration');
// $this->load->view('admin/adminPage',$data);


	}

}
	public function getCategory(){
				$this->load->model('modelTrainer');
				$result=$this->modelTrainer->retriveCategory();

				$data['eqclass']=$result;
				$this->load->view('trainer/traineraction/trainerexercise',$data);

				}

				public function getTrainerList(){
						$this->load->model('modelTrainer');
				$result=$this->modelTrainer->retriveTrainer();

				$data['trainerlist']=$result;
				$this->load->view('admin/adminheaderlist/trainerlist',$data);

				}

				public function removeTrainer(){



					$id=$this->input->get('id');
						
					$this->load->model("modelTrainer");
					$result=$this->modelTrainer->retriveTrainerById($id);
				if($result->num_rows() > 0){
					foreach($result->result() as $row){
			
				$imagename=$row->image;
				$imagepath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/trainers/'.$imagename;
				unlink($imagepath);
			
		}
	}
					$this->modelTrainer->deleteTrainer($id);

					$this->session->set_flashData('delete_trainer_message','trainer successfully remove');
					redirect('controlAdmin/index');
						// $data['delete_message']="data successfully delete";
						// $this->load->view('admin/adminPage',$data);

					}

		public function editTrainer(){
			$id=$this->input->get('id');
			$this->load->model('modelTrainer');
			$result=$this->modelTrainer->retriveTrainerById($id);
			$resultclass=$this->modelTrainer->retriveClass();
			

			$data['trainerdetails']=$result;
			$data['class']=$resultclass;
			$this->load->view('admin/adminupdate/edittrainer',$data);
				}

		public function updateEditedTrainer(){
			//form validation...........................................
		$this->load->library('form_validation');
			
	
		$this->form_validation->set_rules('address','address','required',
		array('required'=>'please clearify address'));

	    $this->form_validation->set_rules('contact','Contact','required|regex_match[/^[0-9]{10}$/]');	    
	 	
	    $this->form_validation->set_rules('pword', 'Password', 'required|trim|min_length[8]|alpha_numeric');
	    $this->form_validation->set_rules('repword', 'Confirm Password', 'required|trim|matches[pword]');

	

	if($this->form_validation->run()==false){
		
		echo validation_errors();
				// .................................................................................

	}else{
						$id=$this->input->post('id');
						$tname=$this->input->post('tname');
						$address=$this->input->post('address');
						$email=$this->input->post('email');
						$contact=$this->input->post('contact');
						$uname=$this->input->post('uname');
						$pword=$this->input->post('pword');
						$dob=$this->input->post('dob');
						$jdate=$this->input->post('jdate');
						$package=$this->input->post('package');

			$this->load->model('modelTrainer');
			$this->modelTrainer->updateTrainer($id,$tname,$address,$email,$contact,$uname,$pword,$dob,$jdate,$package);

			$this->session->set_flashData('edit_trainer_message','trainer successfully update');
					redirect(base_url()."controlTrainer/editTrainer?id=".$id);
				}
					}

						public function editPicture(){
	if(isset($_POST['btnsubmitimage'])){

	$config['upload_path']="assets/images/trainers";
		$config['allowed_types']  = 'gif|jpg|png';
		$config['max-width']="100";
		$config['max-height']="100";

		$this->load->library('upload',$config);
		// $this->upload->do_upload('userfile');
		 if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->model('modelTrainer');
		
// for delete of image
	$id=$this->input->post('id');
						$result=$this->modelTrainer->retriveTrainerById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->image;

				// 		$path='C:/xampp/htdocs/muscleFactory/assets/images/trainers/'.$filename;
				// unlink($path);
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/trainers/'.$filename;
				unlink($path);	
			

			
		}
	}
// ............................

	$image=$data['upload_data']['file_name'];

	
	$this->modelTrainer->updateImage($id,$image);

	// $result=$this->modelAdmin->retriveMemberById($id);
	$this->session->set_flashData('image_update','image sucessfully update');
	redirect('controlAdmin/index');

	// $data['image_update']='image sucessfull update';
	// $this->load->view('admin/adminPage',$data);
}


}

public function getMember(){
$this->load->model("modelTrainer");
$result=$this->modelTrainer->retriveMember();

$data['memberlist']=$result;
 $this->load->view('trainer/trainerheaderlist/memberlist/memberlist',$data);
}
public function viewDetails(){
	$id=$this->input->get('id');
	$this->session->set_userdata('sess_id',$id);
	$this->load->model('modelTrainer');
	$result=$this->modelTrainer->retriveMemberById($id);

	$data['viewdetails']=$result;
	$this->load->view('trainer/trainerheaderlist/memberlist/memberdetails',$data);
}

// public function dietForm(){
// 	$this->load->view('trainer/trainerdiet');
// }

}


?>