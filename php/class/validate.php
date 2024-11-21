<?php
include 'insertSched.php';
include 'updateSched.php';

class validate extends config {
    public function viewer($a) {
		$con = $this->con();
		$sql = $a;
		$data = $con->prepare($sql);
		$data->execute();
		$result = $data->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function valAddSched($schedule_time) {
		$insert = new insertSched($schedule_time);
			if($insert->addSched()) {
				echo 'meow inserted!!!!';
                return true;
			} else {
				echo 'no meow inserted :((';
                return false;
			}
	}

	public function valEditSched($schedule_time, $schedule_id) {
		$edit = new updateSched($schedule_time, $schedule_id);
	
		if ($edit->editSched()) {
			echo 'meow edited!!!';
			return true;
		} else {
			echo 'no meow edited :((((';
			return false;
		}
	}
	
}


 

?>  