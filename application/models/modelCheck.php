<?php
class ModelCheck extends CI_Model{
	public function forloginTrainer($uname,$pword){
	$this->db->where('uname',$uname);
	$this->db->where('pword',$pword);

	return $this->db->get('tbltrainer');

	}
	public function forloginAdmin($uname,$pword){
	$this->db->where('uname',$uname);
	$this->db->where('pword',$pword);

	return $this->db->get('tbladmin');
	}

	
	public function isEmailAvailable($email){
		$this->db->where('email',$email);
		$query=$this->db->get('tblregister');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}
	public function isTrainerEmailAvailable($email){
		$this->db->where('email',$email);
		$query=$this->db->get('tbltrainer');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}

	public function isUnameAvailable($uname){
		$this->db->where('uname',$uname);
		$query=$this->db->get('tblregister');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}


	public function isUnameAvailableInTblAdmin($cuname){
		$this->db->where('uname',$cuname);
		$query=$this->db->get('tbladmin');

		if($query==null){
			return true;
		}else{
			return false;
		}
	}


	public function isPwordAvailableInTblAdmin($cpword){
		$this->db->where('pword',$cpword);
		$query=$this->db->get('tbladmin');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}

	public function isTrainerUnameAvailable($uname){
		$this->db->where('uname',$uname);
		$query=$this->db->get('tbltrainer');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}

	public function isMemberAvailable($mid){
		$this->db->where('id',$mid);
		$query=$this->db->get('tblregister');

		if($query->num_rows() >0){
			foreach ($query->result() as $row) {
				return $row->mname;
			}
			
		}else{
			return false;
		}
	}

		public function isCategoryAvailable($cat){
		$this->db->where('eqcat',$cat);
		return $this->db->get('tblexercise');

		// if($query->num_rows() >0){
		// 	foreach ($query->result() as $row) {
		// 		return $row->eqname;
		// 	}
			
		// }else{
		// 	return false;
		// }
	}

	public function retriveScheduleById($mid){

		$this->db->where('mid',$mid);
		return $this->db->get('tblschedule');
	}

public function updatePassword($cuname,$cpword,$uname,$pword){
	$arr=array(
		'uname'=>$uname,
		'pword'=>$pword
	);
	$this->db->where('uname',$cuname);
	$this->db->where('pword',$cpword);

	$this->db->update('tbladmin',$arr);
}

}
?>