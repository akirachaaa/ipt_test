<?php


function addSchedMsg() {
    if(isset($_POST['submit'])) {
        $valid = new validate(); 
        $schedule_time = $_POST['add_time'];

        if ($valid->valAddSched($schedule_time)) {
            echo '<meta http-equiv="refresh" content="0; url=./schedule.php">';
            header("Location: ./schedule.php");
            exit(); 
        } else {
            echo "Failed to add schedule.";
        }
    }
}

function delSchedMsg() {
    if(isset($_GET['delSched'])) { 
        $schedule_id = $_GET['delSched'];
        $delete = new delete($schedule_id);

        if($delete->delSched()) {
                echo '<meta http-equiv="refresh" content="0; url=./schedule.php">';
                echo 'Schedule deleted successfully';
			} else {
				echo 'Error deleting schedule';
			}
        }
}



?>