<?php
class ControlImage extends CI_Controller{
public function __construct(){
		parent:: __construct();
		// header('Expires: Thu, 01-Jan-70 00:00:01 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control:no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
	}
				public function getCategory(){
				$this->load->model('modelImage');
				$result=$this->modelImage->retriveCategory();

				$data['iclass']=$result;
				$this->load->view('admin/adminaction/adminimages',$data);

				}

				 public function newImage(){

 	$iname=$this->input->post('iname');
 	$icat=$this->input->post('icat');
//for uploading video

 	/*
 for uploading video firstly.open xampp 
 goto apache server config and open (php.ini)
 	change on post_max_size=250M;
	change on upload_max_filesize=250M;

 	*/
 		$config['upload_path']="assets/images";
		$config['allowed_types']  = 'gif|jpg|png';
		

		$this->load->library('upload',$config);
		//$this->upload->do_upload('video');


		 if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$data=array('upload_data'=>$this->upload->data());

	$image=$data['upload_data']['file_name'];
	

	$this->load->model('modelImage');
	$this->modelImage->saveImage($iname,$icat,$image);

	$this->session->set_flashdata('imginsertmsg','data sucessfully insert in image table');
	redirect('controlImage/getCategory');




 }


//this is for images at admin page
 	public function getImageList(){
			
				$this->load->model('modelImage');
				$result=$this->modelImage->retriveImage();

				$data['imagelist']=$result;
				$this->load->view('admin/adminheaderlist/imagelist',$data);
		}


// this is for gallery of home page
	public function getImage(){
					$this->load->model('modelImage');
					$result=$this->modelImage->retriveImage();

					$data['eximages']=$result;
					$this->load->view('images',$data);
				}

//this help to edit image of folder images
	public function editPicture(){
	if(isset($_POST['btnsubmitimage'])){

	$config['upload_path']="assets/images";
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
		
		$this->load->model('modelImage');
		
// for delete of image
	$id=$this->input->post('id');
	$result=$this->modelImage->retriveImageById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->image;

				// 		$path='C:/xampp/htdocs/muscleFactory/assets/images/'.$filename;
				// unlink($path);
				$path=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/'.$filename;
				unlink($path);	

			

			
		}
	}
// ............................

	$image=$data['upload_data']['file_name'];

	
	$this->modelImage->updateImage($id,$image);
	$this->session->set_flashData('tblimage_update','image sucessfully update');
	redirect('controlAdmin/index');
}


}

public function removeImage(){
	$id=$this->input->get('id');
	$this->load->model('modelImage');
	$result=$this->modelImage->retriveImageById($id);
				if($result->num_rows() > 0){
					foreach($result->result() as $row){
			
				$imagename=$row->image;
				$imagepath=$_SERVER['DOCUMENT_ROOT'].'/musclefactorygym/assets/images/'.$imagename;
				unlink($imagepath);
			
		}
	}
	$this->modelImage->deleteImage($id);

		$this->session->set_flashdata('delimgmsg','image sucessfully delete from table image');
			redirect('controlAdmin/index');
}


public function editImageDetails(){

		$id=$this->input->get('id');
			$this->load->model('modelImage');
			$result=$this->modelImage->retriveImageById($id);
			$resultcat=$this->modelImage->retriveCategory();

			$data['retriveimagelist']=$result;
			$data['iclass']=$resultcat;
			$this->load->view('admin/adminupdate/editimagedetails',$data);
	
}

public function updateEditedImageDEtails(){
	$id=$this->input->post('id');
	$iname=$this->input->post('iname');
	$icat=$this->input->post('icat');

	$this->load->model('modelImage');
	$this->modelImage->updateImageDetails($id,$iname,$icat);

	$this->session->set_flashData('image_dtl_update','image details sucessfully update');
	redirect(base_url()."controlImage/editImageDetails?id=".$id);
}

public function searchImage(){
			$forsearch=$this->input->post('forsearch');

			$this->load->model('modelImage');
			$result=$this->modelImage->retriveSearchImage($forsearch);

			$data['eximages']=$result;
			$this->load->view('images',$data);

		}
}
?>