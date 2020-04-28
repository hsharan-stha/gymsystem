<?php
class ModelVideo extends CI_Model{
	public function saveVideo($vname,$vcat,$video){
		$arr=array(
			'vname'=>$vname,
			'vcat'=>$vcat,
			'video'=>$video
			);
		$this->db->insert('tblvideo',$arr);
	}

	public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}

			public function retriveVideo(){
			return $this->db->get('tblvideo');
			}

			// public function retriveVideoById($id){
			// 		$this->db->where('id',$id);
			// 		return $this->db->get('tblexercise');
			// }
			public function retriveVideoById($id){
					$this->db->where('id',$id);
					return $this->db->get('tblvideo');
			}
// // 

// 			public function updateVideo($id,$video){
// 	$arr=array(
// 		'id'=>$id,
// 		'eqvideo'=>$video
// 		);
// 	$this->db->where('id',$id);
// 	$this->db->update('tblexercise',$arr);
// }
		public function updateVideo($id,$video){
			$arr=array(
		'id'=>$id,
		'video'=>$video
		);
	$this->db->where('id',$id);
	$this->db->update('tblvideo',$arr);
		}

		// 	public function retriveChestVideo($id){
		// 	$this->db->where('id',$id);
		// 	return $this->db->get('tblexercise');
		// }

		public function deleteVideo($id){
			$this->db->where('id',$id);
			$this->db->delete('tblvideo');
		}

		
					public function updateVideoDetails($id,$vname,$vcat){
			$arr=array(
			'id'=>$id,
			'vname'=>$vname,
			'vcat'=>$vcat
				);
			$this->db->where('id',$id);
			$this->db->update('tblvideo',$arr);

			}
			public function retriveSearchVideo($forsearch){
			$this->db->like('vname',$forsearch);
			return $this->db->get('tblvideo');
		}
}
?>