<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlWelcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('modelWelcome');
		$result=$this->modelWelcome->retriveClass();
		$resultmember=$this->modelWelcome->retriveMember();
		$resulttrainer=$this->modelWelcome->retriveTrainer();
		$resultimage=$this->modelWelcome->retriveImage();
		
		
		$data['class']=$result;
		$data['mid']=$resultmember;
		$data['trainer']=$resulttrainer;
		$data['image']=$resultimage;
		$this->load->view('index',$data);
	}
	public function goToBmiTable()
	{
		$this->load->view('bmitable');
	}
	public function goToAdmin()
	{
		$this->load->view('admin/adminPage');
	}
	public function goToTrainer(){
		$this->load->view('trainer/trainerPage');
	}
	public function goToLogin(){
		$this->load->view('loginform');
	}
	public function goToMemberRegistration(){
		$this->load->model('modelWelcome');
		$result=$this->modelWelcome->retriveClass();
		$data['class']=$result;

		$this->load->view('admin/adminaction/memberregister',$data);
	}
	public function goToTrainerRegistration(){
		$this->load->model('modelWelcome');
		$result=$this->modelWelcome->retriveClass();
		$data['class']=$result; 

		$this->load->view('admin/adminaction/trainerregister',$data);
	}
	// public function goToExerciseRegistration(){
	// 	$this->load->view('admin/adminaction/adminexercise');
	// }
	// public function goToImageRegistration(){
	// 	$this->load->view('admin/adminaction/adminimages');
	// }
	// public function goToVideoRegistration(){
	// 	$this->load->view('admin/adminaction/adminvideos');
	// }
	// public function goToTrainerExerciseRegistration(){
	// 	$this->load->view('trainer/traineraction/trainerexercise');
	// }
	public function goToTrainerDietRegistration(){
		$this->load->view('trainer/traineraction/trainerdiet');
	}
	public function goToTrainerScheduleRegistration(){
		$this->load->view('trainer/traineraction/trainerschedule');
	}
	public function  goToChangePassword(){
		$this->load->view('admin/changepassword');
	}
}

	

	

