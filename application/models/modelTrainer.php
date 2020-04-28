<?php
class ModelTrainer extends CI_Model{

public function saveTrainer($tname,$image,$address,$email,$contact,$uname,$pword,$dob,$jdate,$package){
$arr=array(
'tname'=>$tname,
'image'=> $image,
'address'=>$address,
'email'=>$email,
'contact'=>$contact,
'uname'=>$uname,
'pword'=>$pword,
'dob'=>$dob,
'jdate'=>$jdate,
'package'=>$package
);

$this->db->insert("tbltrainer",$arr);

}
public function retriveMember(){
  $result=$this->db->get("tblregister");
  return $result;
}
public function retriveMemberById($id){
	$this->db->where("id",$id);
	$result=$this->db->get("tblregister");
	return $result;
}
	public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}

public function retriveTrainer(){
	return $this->db->get('tbltrainer');
}
public function deleteTrainer($id){
			$this->db->where('id',$id);
			$this->db->delete('tbltrainer');
		}

		public function retriveTrainerById($id){
			$this->db->where('id',$id);
			return $this->db->get('tbltrainer');
		}

		public function updateTrainer($id,$tname,$address,$email,$contact,$uname,$pword,$dob,$jdate,$package){
			$arr=array(
				'tname'=>$tname,
				'address'=>$address,
				'email'=>$email,
				'contact'=>$contact,
				'uname'=>$uname,
				'pword'=>$pword,
				'dob'=>$dob,
				'jdate'=>$jdate,
				'package'=>$package
				);
			$this->db->where('id',$id);
			$this->db->update('tbltrainer',$arr);

		}
		public function updateImage($id,$image){
			$arr=array(
		'id'=>$id,
		'image'=>$image
		);
	$this->db->where('id',$id);
	$this->db->update('tbltrainer',$arr);
		}

		public function retriveClass(){
			return $this->db->get('tblclass');
		}
}


?>