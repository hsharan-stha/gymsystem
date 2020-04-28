<?php

class ModelSchedule extends CI_Model{
	public function retriveCategory(){
		return $this->db->get('tblexcategory');
	}

	public function retriveMember(){
		return $this->db->get('tblregister');
	}

	public function retriveMemberById($id){
		$this->db->where('id',$id);
	return $this->db->get('tblregister');
	}

	public function saveSchedule($mid,$mname,$esdate,$eedate,
			$day1,$cat1,$ename1cat1,$ename2cat1,$ename3cat1,$ename4cat1,$ename5cat1,$ename6cat1,
			$day2,$cat2,$ename1cat2,$ename2cat2,$ename3cat2,$ename4cat2,$ename5cat2,$ename6cat2,
			$day3,$cat3,$ename1cat3,$ename2cat3,$ename3cat3,$ename4cat3,$ename5cat3,$ename6cat3,
			$day4,$cat4,$ename1cat4,$ename2cat4,$ename3cat4,$ename4cat4,$ename5cat4,$ename6cat4,
			$day5,$cat5,$ename1cat5,$ename2cat5,$ename3cat5,$ename4cat5,$ename5cat5,$ename6cat5,
			$day6,$cat6,$ename1cat6,$ename2cat6,$ename3cat6,$ename4cat6,$ename5cat6,$ename6cat6,
			$day7,$cat7,$ename1cat7,$ename2cat7,$ename3cat7,$ename4cat7,$ename5cat7,$ename6cat7){
				$arr=array(
					'mid'=>$mid,
					'mname'=>$mname,
					'esdate'=>$esdate,
					'eedate'=>$eedate,
					'day1'=>$day1,
					'cat1'=>$cat1,
					'ename1cat1'=>$ename1cat1,
					'ename2cat1'=>$ename2cat1,
					'ename3cat1'=>$ename3cat1,
					'ename4cat1'=>$ename4cat1,
					'ename5cat1'=>$ename5cat1,
					'ename6cat1'=>$ename6cat1,
					'day2'=>$day2,
					'cat2'=>$cat2,
					'ename1cat2'=>$ename1cat2,
					'ename2cat2'=>$ename2cat2,
					'ename3cat2'=>$ename3cat2,
					'ename4cat2'=>$ename4cat2,
					'ename5cat2'=>$ename5cat2,
					'ename6cat2'=>$ename6cat2,
					'day3'=>$day3,
					'cat3'=>$cat3,
					'ename1cat3'=>$ename1cat3,
					'ename2cat3'=>$ename2cat3,
					'ename3cat3'=>$ename3cat3,
					'ename4cat3'=>$ename4cat3,
					'ename5cat3'=>$ename5cat3,
					'ename6cat3'=>$ename6cat3,
					'day4'=>$day4,
					'cat4'=>$cat4,
					'ename1cat4'=>$ename1cat4,
					'ename2cat4'=>$ename2cat4,
					'ename3cat4'=>$ename3cat4,
					'ename4cat4'=>$ename4cat4,
					'ename5cat4'=>$ename5cat4,
					'ename6cat4'=>$ename6cat4,
					'day5'=>$day5,
					'cat5'=>$cat5,
					'ename1cat5'=>$ename1cat5,
					'ename2cat5'=>$ename2cat5,
					'ename3cat5'=>$ename3cat5,
					'ename4cat5'=>$ename4cat5,
					'ename5cat5'=>$ename5cat5,
					'ename6cat5'=>$ename6cat5,
					'day6'=>$day6,
					'cat6'=>$cat6,
					'ename1cat6'=>$ename1cat6,
					'ename2cat6'=>$ename2cat6,
					'ename3cat6'=>$ename3cat6,
					'ename4cat6'=>$ename4cat6,
					'ename5cat6'=>$ename5cat6,
					'ename6cat6'=>$ename6cat6,
					'day7'=>$day7,
					'cat7'=>$cat7,
					'ename1cat7'=>$ename1cat7,
					'ename2cat7'=>$ename2cat7,
					'ename3cat7'=>$ename3cat7,
					'ename4cat7'=>$ename4cat7,
					'ename5cat7'=>$ename5cat7,
					'ename6cat7'=>$ename6cat7

					);


					$this->db->insert('tblschedule',$arr);
	}

	public function retriveSchedule(){
		return $this->db->get('tblschedule');
	}

	public function retriveScheduleByMid($mid){
		$this->db->where('mid',$mid);
		return $this->db->get('tblschedule');
	}

	public function updateSchedule($id,$mid,$mname,$esdate,$eedate,
			$day1,$cat1,$ename1cat1,$ename2cat1,$ename3cat1,$ename4cat1,$ename5cat1,$ename6cat1,
			$day2,$cat2,$ename1cat2,$ename2cat2,$ename3cat2,$ename4cat2,$ename5cat2,$ename6cat2,
			$day3,$cat3,$ename1cat3,$ename2cat3,$ename3cat3,$ename4cat3,$ename5cat3,$ename6cat3,
			$day4,$cat4,$ename1cat4,$ename2cat4,$ename3cat4,$ename4cat4,$ename5cat4,$ename6cat4,
			$day5,$cat5,$ename1cat5,$ename2cat5,$ename3cat5,$ename4cat5,$ename5cat5,$ename6cat5,
			$day6,$cat6,$ename1cat6,$ename2cat6,$ename3cat6,$ename4cat6,$ename5cat6,$ename6cat6,
			$day7,$cat7,$ename1cat7,$ename2cat7,$ename3cat7,$ename4cat7,$ename5cat7,$ename6cat7){

		$arr=array(
					
					'esdate'=>$esdate,
					'eedate'=>$eedate,
					'day1'=>$day1,
					'cat1'=>$cat1,
					'ename1cat1'=>$ename1cat1,
					'ename2cat1'=>$ename2cat1,
					'ename3cat1'=>$ename3cat1,
					'ename4cat1'=>$ename4cat1,
					'ename5cat1'=>$ename5cat1,
					'ename6cat1'=>$ename6cat1,
					'day2'=>$day2,
					'cat2'=>$cat2,
					'ename1cat2'=>$ename1cat2,
					'ename2cat2'=>$ename2cat2,
					'ename3cat2'=>$ename3cat2,
					'ename4cat2'=>$ename4cat2,
					'ename5cat2'=>$ename5cat2,
					'ename6cat2'=>$ename6cat2,
					'day3'=>$day3,
					'cat3'=>$cat3,
					'ename1cat3'=>$ename1cat3,
					'ename2cat3'=>$ename2cat3,
					'ename3cat3'=>$ename3cat3,
					'ename4cat3'=>$ename4cat3,
					'ename5cat3'=>$ename5cat3,
					'ename6cat3'=>$ename6cat3,
					'day4'=>$day4,
					'cat4'=>$cat4,
					'ename1cat4'=>$ename1cat4,
					'ename2cat4'=>$ename2cat4,
					'ename3cat4'=>$ename3cat4,
					'ename4cat4'=>$ename4cat4,
					'ename5cat4'=>$ename5cat4,
					'ename6cat4'=>$ename6cat4,
					'day5'=>$day5,
					'cat5'=>$cat5,
					'ename1cat5'=>$ename1cat5,
					'ename2cat5'=>$ename2cat5,
					'ename3cat5'=>$ename3cat5,
					'ename4cat5'=>$ename4cat5,
					'ename5cat5'=>$ename5cat5,
					'ename6cat5'=>$ename6cat5,
					'day6'=>$day6,
					'cat6'=>$cat6,
					'ename1cat6'=>$ename1cat6,
					'ename2cat6'=>$ename2cat6,
					'ename3cat6'=>$ename3cat6,
					'ename4cat6'=>$ename4cat6,
					'ename5cat6'=>$ename5cat6,
					'ename6cat6'=>$ename6cat6,
						'day7'=>$day7,
					'cat7'=>$cat7,
					'ename1cat7'=>$ename1cat7,
					'ename2cat7'=>$ename2cat7,
					'ename3cat7'=>$ename3cat7,
					'ename4cat7'=>$ename4cat7,
					'ename5cat7'=>$ename5cat7,
					'ename6cat7'=>$ename6cat7

					);

		$this->db->where('id',$id);
		$this->db->update('tblschedule',$arr);

	}
	public function deleteSchedule($mid){
			$this->db->where('mid',$mid);
			$this->db->delete('tblschedule');
		}

}
?>