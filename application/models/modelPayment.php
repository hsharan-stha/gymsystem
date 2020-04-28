<?php
class ModelPayment extends CI_Model{
	public function retriveMember(){
		return $this->db->get('tblregister');
	}

	public function savePayment($mid,$mname,$pdate,$repdate){
		$arr=array(
			'mid'=>$mid,
			'mname'=>$mname,
			'pdate'=>$pdate,
			'repdate'=>$repdate,
			);
		$this->db->insert('tblpayment',$arr);
	}

	public function retrivePaymentByDate($date){
		$this->db->where('repdate >=',$date);
		return $this->db->get('tblpayment');
	}

	public function retrivePayment(){
		return $this->db->get('tblpayment');
	}

		public function deletePayment($id){
		$this->db->where('id',$id);
		$this->db->delete('tblpayment');
	}
}