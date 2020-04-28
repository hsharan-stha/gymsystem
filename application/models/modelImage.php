<?php
class ModelImage extends CI_Model{
	public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}

		public function saveImage($iname,$icat,$image){
			$arr=array(
			'iname'=>$iname,
			'icat'=>$icat,
			'image'=>$image
			);
			$this->db->insert('tblimage',$arr);
		}

		public function retriveImage(){

			return $this->db->get('tblimage');
		}

		public function retriveImageById($id){
			$this->db->where('id',$id);
			return $this->db->get('tblimage');
		}
			public function updateImage($id,$image){
	$arr=array(
		'id'=>$id,
		'image'=>$image
		);
	$this->db->where('id',$id);
	$this->db->update('tblimage',$arr);
}
public function deleteImage($id){
			$this->db->where('id',$id);
			$this->db->delete('tblimage');
		}

public function updateImageDetails($id,$iname,$icat){
$arr=array(
'id'=>$id,
'iname'=>$iname,
'icat'=>$icat
	);
$this->db->where('id',$id);
$this->db->update('tblimage',$arr);

}
public function retriveSearchImage($forsearch){
			$this->db->like('iname',$forsearch);
			return $this->db->get('tblimage');
		}
}

?>