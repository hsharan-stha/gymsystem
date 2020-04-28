<?php
class ModelEntry extends CI_Model{
	public function retriveMember(){
		return $this->db->get('tblregister');
	}

	public function saveEntry($mid,$mname,$edate,$etime){
		$arr=array(
			'mid'=>$mid,
			'mname'=>$mname,
			'edate'=>$edate,
			'etime'=>$etime,
			);
		$this->db->insert('tblentry',$arr);
	}

	public function saveLeftTimeOfNewEntry($mid,$ltime,$ldate){
		$arr=array(
			
			'ltime'=>$ltime
			);
		$this->db->where('mid',$mid);
		$this->db->where('edate',$ldate); //entry date == left date to update time of same person on different date
		$this->db->update('tblentry',$arr);
	}

	public function retriveEntryByDate($date){
		$this->db->where('edate',$date);
		return $this->db->get('tblentry');
	}

	public function deleteEntry($id){
		$this->db->where('id',$id);
		$this->db->delete('tblentry');
	}
}


?>