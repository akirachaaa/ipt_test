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

function editSchedMsg() {
    if (isset($_POST['edit_time'])) {
        $schedule_id = $_POST['schedule_id']; // Ensure the schedule ID is fetched
        $schedule_time = $_POST['edit_time']; // Get the updated schedule time

        $valid = new validate(); // Validation class instance

        // Validate and attempt to update the schedule
        if ($valid->valEditSched($schedule_time, $schedule_id)) {
            echo '<meta http-equiv="refresh" content="0; url=./schedule.php">';
            header("Location: ./schedule.php");
            exit(); 
        } else {
            echo 'Error editing schedule';
        }
    }
}





?>