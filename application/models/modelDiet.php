<?php
class ModelDiet extends CI_Model{
	public function saveDiet($dname,$dcat,$dimage,$ddetails,$dvideo){
		$arr=array(
				'dname'=>$dname,
				'dcat'=>$dcat,
				'dimage'=>$dimage,
				'ddetails'=>$ddetails,
				'dvideo'=>$dvideo

				);
			$this->db->insert('tbldiet',$arr);
	}
	public function retriveDiet(){

			return $this->db->get('tbldiet');
		}

		public function retriveDietById($id){
			$this->db->where('id',$id);
			return $this->db->get('tbldiet');
		}

		public function deleteDiet($id){
			$this->db->where('id',$id);
			$this->db->delete('tbldiet');
		}
						
						public function updateDiet($id,$dname,$dcat,$ddetails){
				$arr=array(
				'id'=>$id,
				'dname'=>$dname,
				'dcat'=>$dcat,
				'ddetails'=>$ddetails
					);
				$this->db->where('id',$id);
				$this->db->update('tbldiet',$arr);

				}

	public function updateDietImage($id,$dimage){
				$arr=array(
				'id'=>$id,
				'dimage'=>$dimage
					);
				$this->db->where('id',$id);
				$this->db->update('tbldiet',$arr);

				}

				public function updateDietVideo($id,$dvideo){
				$arr=array(
				'id'=>$id,
				'dvideo'=>$dvideo
					);
				$this->db->where('id',$id);
				$this->db->update('tbldiet',$arr);

				}
				public function retriveSearchDiet($forsearch){
			$this->db->like('dname',$forsearch);
			return $this->db->get('tbldiet');
		}
}

?>