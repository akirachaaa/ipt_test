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
                return true;
			} else {
                return false;
			}
	}

	public function valEditSched($schedule_time, $schedule_id) {
		$edit = new updateSched($schedule_time, $schedule_id);
		if ($edit->editSched()) {
			echo 'Schedule successfully edited!';
			return true;
		} else {
			error_log('Error editing schedule with ID: ' . $schedule_id);
			echo 'Failed to edit schedule.';
			return false;
		}
	}
	
}


 

?>  