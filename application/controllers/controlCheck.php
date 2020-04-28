<?php

class ControlCheck extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		// header('Expires: Thu, 01-Jan-70 00:00:01 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control:no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
	}
	public function checkForLogin(){
		$uname=$this->input->post('uname');
		$pword=$this->input->post('pword');

		$this->load->model('modelCheck');
		$resultTrainer=$this->modelCheck->forloginTrainer($uname,$pword);
		$resultAdmin=$this->modelCheck->forLoginAdmin($uname,$pword);

		if($resultTrainer->num_rows() > 0){
			foreach($resultTrainer->result() as $row){
					$dbid=$row->id;
					$dbuname=$row->uname;
					$dbpword=$row->pword;
					
						
				
					if($dbpword==$pword && $dbuname==$uname){
						$this->session->set_userdata('sess_id_for_trainer',$dbid);
						redirect('controlWelcome/goToTrainer');
						die();
					}
					
			}
		}else if($resultAdmin->num_rows() > 0){
			foreach($resultAdmin->result() as $row){
					$dbid=$row->id;
					$dbuname=$row->uname;
					$dbpword=$row->pword;

					if($dbpword==$pword && $dbuname==$uname){
					
						$this->session->set_userdata('sess_id',$dbid);
						redirect('controlWelcome/goToAdmin');
						
						die();

					}
					
			}
		}

		else{
						$this->session->set_flashData('loginmsg','login fail:please try again');
						redirect('controlWelcome/goToLogin');
					}



	}

	public function destroySession(){
		session_destroy();
		$this->session->set_userdata('sess_id','');
		redirect('controlWelcome/index');
	}

	public function checkUnameAvailability(){
	
			$this->load->model('modelCheck');
			if($this->modelCheck->isUnameAvailable($_POST['uname'])){
					echo 'uname already register';
			}
			else{
				echo 'valid uname';
			}
		}
		public function checkUnameAvailabilityFromTblAdmin(){
	
			$this->load->model('modelCheck');
			if($this->modelCheck->isUnameAvailableInTblAdmin($_POST['cuname'])){
					echo 'uname match';
			}
			else{
				echo 'uname not match';
			}
		}

		public function checkPwordAvailabilityFromTblAdmin(){
	
			$this->load->model('modelCheck');
			if($this->modelCheck->isPwordAvailableInTblAdmin($_POST['cpword'])){
					echo 'password match';
			}
			else{
				echo 'password not match';
			}
		}

			public function checkTrainerUnameAvailability(){
		
			$this->load->model('modelCheck');
			if($this->modelCheck->isTrainerUnameAvailable($_POST['uname'])){
					echo 'uname already register';
			}
			else{
				echo 'valid uname';
			}
		}



		public function checkEmailAvailability(){
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			echo 'invalid email';

		}else{
			$this->load->model('modelCheck');
			if($this->modelCheck->isEmailAvailable($_POST['email'])){
					echo 'email already register';
			}
			else{
				echo 'valid uname';
			}
		}
}

	public function checkTrainerEmailAvailability(){
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			echo 'invalid email';

		}else{
			$this->load->model('modelCheck');
			if($this->modelCheck->isTrainerEmailAvailable($_POST['email'])){
					echo 'email already register';
			}
			else{
				echo 'valid uname';
			}
		}
}
		public function checkMemberName(){
				$this->load->model('modelCheck');
			if($this->modelCheck->isMemberAvailable($_POST['mid'])){
					echo $this->modelCheck->isMemberAvailable($_POST['mid']);
			}
			else{
				echo 'member not available';
			}
		}
	
		public function checkCategoryName(){
				$this->load->model('modelCheck');
				$result=$this->modelCheck->isCategoryAvailable($_POST['get_option']);
			

						if($result->num_rows() >0){
							// echo "<option>".'please select exercise'."</otpion>"."<br/>";
							foreach ($result->result() as $row) {

								echo "<option>".$row->eqname."</otpion>"."<br/>";
							}
							}
					else{
							echo "<option>".'category not available'."</otpion>"."<br/>";
						}
		}


		public function getSchedule(){
			$mid=$this->input->post('mid');
			$this->session->set_userdata('sess_mid',$mid);
			$this->load->model('modelCheck');
			$resultSchedule=$this->modelCheck->retriveScheduleById($mid);

			$data['retriveschedule']=$resultSchedule;
			$this->load->view('schedulepage',$data);
			

		}

public function changePassword(){
	$cuname=$this->input->post('cuname');
	$cpword=$this->input->post('cpword');
	$uname=$this->input->post('uname');
	$pword=$this->input->post('pword');

	$this->load->model('modelCheck');
	$this->modelCheck->updatePassword($cuname,$cpword,$uname,$pword);

	$this->session->set_flashData('changemsg','username and password successfully changed');
	redirect('controlWelcome/goToChangePassword');
}
	
}


?>