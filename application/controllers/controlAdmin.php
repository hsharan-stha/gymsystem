<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAdmin extends CI_Controller{
public function index(){
$this->load->view('admin/adminPage');
}

// public function openRegister(){
//   $this->load->view('admin/register');
// }

// public function do_upload(){
// 		$config['upload_path']="assets/images/admin";
// 		  $config['allowed_types']  = 'gif|jpg|png';
// 		$config['max-width']="100";
// 		$config['max-height']="100";

// 		$this->load->library('upload',$config);
// 		if(!$this->upload->do_upload('userfile')){
// 			$error = array( "error" => $this->upload->display_errors());
// 			$this->load->view('upload_form', $error);
// 		}else{
// 			$data=array('upload_data'=>$this->upload->data());
			  
// 		}

// }

public function newMember(){
		//form validation...........................................
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mname','membername',
				'required|trim|callback_convert_lowercase');
	
		$this->form_validation->set_rules('address','address','required',
		array('required'=>'please clearify address'));

		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tblregister.email]|strtolower');

	 	$this->form_validation->set_rules('uname', 'username', 'required|trim|is_unique[tblregister.uname]|strtolower');

	    $this->form_validation->set_rules('contact','Contact','required|regex_match[/^[0-9]{10}$/]');

	    $this->form_validation->set_rules('pword', 'Password', 'required|trim|min_length[8]|alpha_numeric');
	    $this->form_validation->set_rules('repword', 'Confirm Password', 'required|trim|matches[pword]');

	

	if($this->form_validation->run()==false){
		echo validation_errors();
	}else{
		//for uploading images
		$config['upload_path']="assets/images/members";
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
$mname=$this->input->post('mname');
$image=$data['upload_data']['file_name'];
$address=$this->input->post('address');
$email=$this->input->post('email');
$contact=$this->input->post('contact');
$uname=$this->input->post('uname');
$pword=$this->input->post('pword');
$dob=$this->input->post('dob');
$weight=$this->input->post('weight');
$ftheight=$this->input->post('ftheight');
$heightinch=$this->input->post('heightinch');
$jdate=$this->input->post('jdate');
$package=$this->input->post('package');
$bmi=$this->input->post('bmi');

$this->load->model('modelAdmin');
$this->modelAdmin->saveMember($mname,$image,$address,$email,$contact,$uname,$pword,$dob,$weight,$ftheight,$heightinch,$jdate,$package,$bmi);

// $data['insertmsg']="data insert successfully
$this->session->set_flashData('insertmsg','data sucessfully insert in table registration');
redirect('controlWelcome/goToMemberRegistration');
// $this->load->view('admin/adminPage',$data);


	}

}


public function convert_lowercase() {
  return strtolower($this->input->post('mname'));
}

public function getMember(){
$this->load->model("modelAdmin");
$result=$this->modelAdmin->retriveMember();

$data['memberlist']=$result;
 $this->load->view('admin/adminheaderlist/memberlist/memberlist',$data);
}


public function removeMember(){


	$this->load->model("modelAdmin");
	$id=$this->input->get('id');
	$result=$this->modelAdmin->retriveMemberById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->image;
				
				
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/members/'.$filename;
				unlink($path);
			
		}
	}

	$this->modelAdmin->deleteMember($id);

$this->session->set_flashData('delete_message','data successfully delete');
redirect('controlAdmin/index');
	// $data['delete_message']="data successfully delete";
	// $this->load->view('admin/adminPage',$data);

}

public function editMember(){
$this->load->model("modelAdmin");
$id=$this->input->get('id');
$this->modelAdmin->retriveMemberById($id);

$result=$this->modelAdmin->retriveMemberById($id);
$resultclass=$this->modelAdmin->retriveClass();


$data['memberdetails']=$result;
$data['class']=$resultclass;
$this->load->view('admin/adminupdate/editmember',$data);
}

public function updateEditedMember(){
		//form validation...........................................
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mname','membername',
				'required|trim|callback_convert_lowercase');
	
		$this->form_validation->set_rules('address','address','required',
		array('required'=>'please clearify address'));

		// $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique_email[tblregister.email]|strtolower');
	 // 	$this->form_validation->set_message('is_unique_email', 'That Email is Already Exists.');

	 // 	$this->form_validation->set_rules('uname', 'username', 'required|trim|is_unique_uname[tblregister.uname]|strtolower');
	 // 	$this->form_validation->set_message('is_unique_uname', 'That username is Already Exists.');

	    $this->form_validation->set_rules('contact','Contact','required|regex_match[/^[0-9]{10}$/]');

	    $this->form_validation->set_rules('pword', 'Password', 'required|trim|min_length[8]|alpha_numeric');
	    $this->form_validation->set_rules('repword', 'Confirm Password', 'required|trim|matches[pword]');

	

	if($this->form_validation->run()==false){
		echo validation_errors();
	}else{
$id=$this->input->post('id');
$mname=$this->input->post('mname');
$address=$this->input->post('address');
$email=$this->input->post('email');
$contact=$this->input->post('contact');
$uname=$this->input->post('uname');
$pword=$this->input->post('pword');
$dob=$this->input->post('dob');
$weight=$this->input->post('weight');
$ftheight=$this->input->post('ftheight');
$heightinch=$this->input->post('heightinch');
$jdate=$this->input->post('jdate');
$package=$this->input->post('package');
$bmi=$this->input->post('bmi');

$this->load->model('modelAdmin');
$this->modelAdmin->updateMember($id,$mname,$address,$email,$contact,$uname,$pword,$dob,$weight,$ftheight,$heightinch,$jdate,$package,$bmi);

$this->session->set_flashData('update_message','data successfully update');
redirect(base_url()."controlAdmin/editMember?id=".$id);

// $data['update_message']="data successfully update";
// $this->load->view('admin/adminPage',$data);

}
}
public function viewDetails(){
	$id=$this->input->get('id');
	$this->load->model('modelAdmin');
	$result=$this->modelAdmin->retriveMemberById($id);

	$data['viewdetails']=$result;
	$this->load->view('admin/adminheaderlist/memberlist/memberdetails',$data);
}

public function editPicture(){
	if(isset($_POST['btnsubmitimage'])){

	$config['upload_path']="assets/images/members";
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
		
		$this->load->model('modelAdmin');
		
// for delete of image
	$id=$this->input->post('id');
						$result=$this->modelAdmin->retriveMemberById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->image;
						
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/members/'.$filename;
				unlink($path);		
				// $path='C:/xampp/htdocs/muscleFactory/assets/images/members/'.$filename;
				// unlink($path);

			
		}
	}
// ............................

	$image=$data['upload_data']['file_name'];

	
	$this->modelAdmin->updateImage($id,$image);

	// $result=$this->modelAdmin->retriveMemberById($id);
	$this->session->set_flashData('image_update','image sucessfully update');
	redirect(base_url()."controlAdmin/viewdetails?id=".$id);

	// $data['image_update']='image sucessfull update';
	// $this->load->view('admin/adminPage',$data);
}


}
// public function deleteImage(){
// $this->load->model("modelAdmin");
// 	$id=$this->input->get('id');
// 	$result=$this->modelAdmin->retriveMemberById($id);
// 	if($result->num_rows() > 0){
// 		foreach($result->result() as $row){
// 				$filename=$row->image;
								
// 				$path='C:/xampp/htdocs/muscleFactory/assets/images/members/'.$filename;
// 				unlink($path);
			
// 		}
// 	}
// 	$data['viewdetails']=$result;
// 	$this->load->view('admin/memberdetails',$data);
// }

}
?>
