<?php
class ModelMessage extends CI_Model{
	public function saveMessage($msg){
		$arr=array(
		'msg'=>$msg
			);
		$this->db->insert('tblmessage',$arr);
	}

	public function retriveMessage(){
	return	$this->db->get('tblmessage');
	}

	public function deleteMessage($id){
		$this->db->where('id',$id);
	$this->db->delete('tblmessage');
	}
}
?>