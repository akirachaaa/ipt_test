<?php
include 'insertSched.php';

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
			} else {
				echo 'no meow inserted :((';
			}
	}
}
 

?>  