<?php
class ControlExercise extends CI_Controller{
public function __construct(){
		parent:: __construct();
		// header('Expires: Thu, 01-Jan-70 00:00:01 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control:no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
	}
	public function newExercise(){
			$eqname=$this->input->post('eqname');
			$eqcat=$this->input->post('eqcat');
			$eqdetails=$this->input->post('eqdetails');
//for image
				$config['upload_path']="assets/images/exercises";
				$config['allowed_types']  = 'gif|jpg|png|mp4';
				$config['max-width']="100";
				$config['max-height']="100";

				$this->load->library('upload',$config);
				$this->upload->do_upload('eqimage');
				$data=array('upload_data'=>$this->upload->data());

			$eqimage=$data['upload_data']['file_name'];
// ..................
//for video

		$this->load->library('upload',$config);

		 if ( ! $this->upload->do_upload('eqvideo'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$datavideo=array('upload_data'=>$this->upload->data());

	$eqvideo=$datavideo['upload_data']['file_name'];
// .......................

			$this->load->model('modelExercise');
			$this->modelExercise->saveExercise($eqname,$eqcat,$eqimage,$eqdetails,$eqvideo);
			if(isset($_POST['btntreqsubmit'])){
			$this->session->set_flashdata('eqinsertmsg','data sucessfully insert into table exercise');
			redirect('controlTrainer/getCategory');
		}else{
			$this->session->set_flashdata('eqinsertmsg','data sucessfully insert into table exercise');
			redirect('controlExercise/getCategory');
		}
				}


				public function getCategory(){
				$this->load->model('modelExercise');
				$result=$this->modelExercise->retriveCategory();

				$data['eqclass']=$result;
				$this->load->view('admin/adminaction/adminexercise',$data);

				}



				public function getExercise(){
				$this->load->model('modelExercise');

				$result=$this->modelExercise->retriveExercise();
				$data['exercise']=$result;

				$this->load->view('exercise',$data);

					}

		public function getChestExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveChestExercise();

				$data['exercise']=$result;
				$this->load->view('exercise',$data);

		}

		
		public function getShoulderExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveShoulderExercise();

				$data['exercise']=$result;
				$this->load->view('exercise',$data);

		}
		public function getBackExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveBackExercise();

				$data['exercise']=$result;
				$this->load->view('exercise',$data);

		}
		public function getBicepsExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveBicepsExercise();

				$data['exercise']=$result;
				$this->load->view('exercise',$data);

		}
		public function getTricepsExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveTricepsExercise();

				$data['exercise']=$result;
				$this->load->view('exercise',$data);

		}
		public function getLegsExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveLegsExercise();

				$data['exercise']=$result;
				$this->load->view('exercise',$data);

		}
		public function getAbsExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveAbsExercise();

				$data['exercise']=$result;
				$this->load->view('exercise',$data);

		}
		public function getExerciseVideo(){
			$id=$this->input->get('id');
			
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveExerciseVideo($id);

			$data['exvideos']=$result;
			

			$this->load->view('exerciseVideo',$data);
		}

		// public function getChestVideo(){
		// 	$id=$this->input->get('id');
			
		// 	$this->load->model('modelExercise');
		// 	$result=$this->modelExercise->retriveChestVideo($id);

		// 	$data['chestexvideo']=$result;
			

		// 	$this->load->view('chestVideo',$data);
		// }

		public function searchExercise(){
			$forsearch=$this->input->post('forsearch');

			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveSearchExercise($forsearch);

			$data['exercise']=$result;
			$this->load->view('exercise',$data);

		}
		public function getExerciseList(){
			
				$this->load->model('modelExercise');
				$result=$this->modelExercise->retriveExercise();

				$data['exerciselist']=$result;
				$this->load->view('admin/adminheaderlist/exerciselist',$data);
		}

		public function removeExercise(){
			$id=$this->input->get('id');
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveExerciseById($id);
				if($result->num_rows() > 0){
					foreach($result->result() as $row){
				$imagename=$row->eqimage;
				$videoname=$row->eqvideo;
				
				
				$imagepath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/exercises/'.$imagename;
				unlink($imagepath);
				$videopath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/exercises/'.$videoname;
				unlink($videopath);
			
		}
	}
			$this->modelExercise->deleteExercise($id);

			$this->session->set_flashdata('delexmsg','exercise sucessfully delete from table exercise');
			if(!isset($this->session->userdata['sess_id'])) {

				  redirect('controlWelcome/goToTrainer');
				}else{
					redirect('controlAdmin/index');}
				}
		

		public function editExercise(){
			$id=$this->input->get('id');
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveExerciseById($id);
			$resultcat=$this->modelExercise->retriveCategory();

			$data['retriveexerciselist']=$result;
			$data['eqclass']=$resultcat;
			$this->load->view('admin/adminupdate/editexercise',$data);
}
	
//for edit exercise image
				public function editPicture(){

	$config['upload_path']="assets/images/exercises";
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
		
		$this->load->model('modelExercise');
		
// for delete of image
	$id=$this->input->post('id');
						$result=$this->modelExercise->retriveExerciseById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->eqimage;

				// 		$path='C:/xampp/htdocs/muscleFactory/assets/images/exercises/'.$filename;
				// unlink($path);
					$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/exercises/'.$filename;
				unlink($path);	
			

			
		}
	}
// ............................

	$image=$data['upload_data']['file_name'];

	
	$this->modelExercise->updateExerciseImage($id,$image);

	// $result=$this->modelAdmin->retriveMemberById($id);
	$this->session->set_flashData('image_update','image sucessfully update');
	if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToTrainer');
}else{
	redirect('controlAdmin/index');
}

	// $data['image_update']='image sucessfull update';
	// $this->load->view('admin/adminPage',$data);

}


	//to edit video of exercise
		public function editVideo(){
	$config['upload_path']="assets/images/exercises";
		$config['allowed_types']  = 'mp4';
	

		$this->load->library('upload',$config);
		 if ( ! $this->upload->do_upload('video'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }
	
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->model('modelExercise');
		
// for delete of video
	$id=$this->input->post('id');
						$result=$this->modelExercise->retriveExerciseById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->eqvideo;
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/exercises/'.$filename;
				unlink($path);	
			

			
		}
	}
// ............................

	$eqvideo=$data['upload_data']['file_name'];

	
	$this->modelExercise->updateExerciseVideo($id,$eqvideo);

	// $result=$this->modelAdmin->retriveMemberById($id);
	$this->session->set_flashData('video_update','video sucessfully update');
	if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToTrainer');
}else{
	redirect('controlAdmin/index');
	}

}
public function updateEditedExercise(){
	$id=$this->input->post('id');
	$eqname=$this->input->post('eqname');
	$eqcat=$this->input->post('eqcat');
	$eqdetails=$this->input->post('eqdetails');

	$this->load->model('modelExercise');
	$this->modelExercise->updateExercise($id,$eqname,$eqcat,$eqdetails);

	$this->session->set_flashData('exercise_update','exercise sucessfully update');
	redirect(base_url()."controlexercise/editExercise?id=".$id);
}

public function exvdoByExName(){
	$eqname=$this->input->get('eqname');
	$this->load->model('modelExercise');
	$result=$this->modelExercise->retvdoByExName($eqname);
	$data['exvideos']=$result;
	$this->load->view('exercisevideo',$data);

}

}

?>