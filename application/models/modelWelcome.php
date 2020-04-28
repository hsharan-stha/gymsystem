<?php
class ModelWelcome extends CI_Model{
		public function retriveClass(){
			return $this->db->get('tblclass');
		}

		public function retriveMember(){
  $result=$this->db->get("tblregister");
  return $result;
}
public function retriveTrainer(){
	return $this->db->get('tbltrainer');
}
	public function retriveImage(){

			return $this->db->get('tblimage');
		}
		

}
?>