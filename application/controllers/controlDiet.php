<?php
class ControlDiet extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		// header('Expires: Thu, 01-Jan-70 00:00:01 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control:no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
	}
	public function newDiet(){
		$dname=$this->input->post('dname');
			$dcat=$this->input->post('dcat');
			$ddetails=$this->input->post('ddetails');
//for image
				$config['upload_path']="assets/images/diets";
				$config['allowed_types']  = 'gif|jpg|png|mp4';
				$config['max-width']="100";
				$config['max-height']="100";

				$this->load->library('upload',$config);
				$this->upload->do_upload('dimage');
				$data=array('upload_data'=>$this->upload->data());

			$dimage=$data['upload_data']['file_name'];

		$this->load->library('upload',$config);
	

		 if ( ! $this->upload->do_upload('dvideo'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$datavideo=array('upload_data'=>$this->upload->data());

	$dvideo=$datavideo['upload_data']['file_name'];
// .......................

			$this->load->model('modelDiet');
			$this->modelDiet->saveDiet($dname,$dcat,$dimage,$ddetails,$dvideo);

			// $data['eqinsertmsg']='data sucessfully insert into table equipment';
			// $this->load->view('admin/adminPage',$data);
		
			$this->session->set_flashdata('dietinsertmsg','data sucessfully insert into table diet');
			redirect('controlWelcome/goToTrainerDietRegistration');
			}
				public function getDietList(){
			
				$this->load->model('modelDiet');
				$result=$this->modelDiet->retriveDiet();

				$data['dietlist']=$result;
				$this->load->view('trainer/trainerheaderlist/dietlist',$data);
		}

		public function removeDiet(){
			$id=$this->input->get('id');

			$this->load->model('modelDiet');
			
			$result=$this->modelDiet->retriveDietById($id);
				if($result->num_rows() > 0){
					foreach($result->result() as $row){
				$imagename=$row->dimage;
				$videoname=$row->dvideo;
				
				
				$imagepath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/diets/'.$imagename;
				unlink($imagepath);
				$videopath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/diets/'.$videoname;
				unlink($videopath);
			
		}
	}
	$this->modelDiet->deletediet($id);
	
		$this->session->set_flashdata('dietdeletemsg','data sucessfully delete from table diet');
			redirect('controlWelcome/goToTrainer');

		}




		public function editDiet(){
			$id=$this->input->get('id');
			$this->load->model('modelDiet');
			$result=$this->modelDiet->retriveDietById($id);
			
			$data['retrivediet']=$result;

			$this->load->view('trainer/trainerupdate/editdiet',$data);
}

public function updateEditedDiet(){
	$id=$this->input->post('id');
	$dname=$this->input->post('dname');
	$dcat=$this->input->post('dcat');
	$ddetails=$this->input->post('ddetails');

	$this->load->model('modelDiet');
	$this->modelDiet->updateDiet($id,$dname,$dcat,$ddetails);

	$this->session->set_flashData('diet_update','diet sucessfully update');
	redirect(base_url()."controlDiet/editDiet?id=".$id);
}

//to edit picture of diet
	public function editPicture(){
	    $config['upload_path']="assets/images/diets";
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
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->model('modelDiet');
		
// for delete of image
	$id=$this->input->post('id');
	$result=$this->modelDiet->retriveDietById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->dimage;
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/diets/'.$filename;
				unlink($path);	
		}
	}


	$dimage=$data['upload_data']['file_name'];
	$this->modelDiet->updateDietImage($id,$dimage);
	$this->session->set_flashData('tbldiet_update','image sucessfully update');
	redirect('controlWelcome/goToTrainer');
}

public function editVideo(){
	$config['upload_path']="assets/images/diets";
		$config['allowed_types']  = 'mp4';
	

		$this->load->library('upload',$config);
		 if ( ! $this->upload->do_upload('video'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }
		// $this->upload->do_upload('video');
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->model('modelDiet');
		
// for delete video
	$id=$this->input->post('id');
	$result=$this->modelDiet->retriveDietById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->dvideo;
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/diets/'.$filename;
				unlink($path);		
		}
	}
// ............................

	$dvideo=$data['upload_data']['file_name'];

	
	$this->modelDiet->updateDietVideo($id,$dvideo);
	$this->session->set_flashData('video_update',' diet video sucessfully update');
  redirect('controlWelcome/goToTrainer');

}
public function getDiet(){
					$this->load->model('modelDiet');
					$result=$this->modelDiet->retriveDiet();

					$data['diets']=$result;
					$this->load->view('diets',$data);
				}


public function searchDiet(){
			$forsearch=$this->input->post('forsearch');

			$this->load->model('modelDiet');
			$result=$this->modelDiet->retriveSearchDiet($forsearch);

			$data['diets']=$result;
			$this->load->view('diets',$data);

		}
}

?>