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
    if (isset($_POST['edit_time']) && isset($_POST['schedule_id'])) {
        $schedule_id = $_POST['schedule_id']; // Ensure the schedule ID is fetched
        $schedule_time = $_POST['edit_time']; // Get the updated schedule time
        $valid = new validate(); // Validation class instance
        
        // Validate and attempt to update the schedule
        if ($valid->valEditSched($schedule_time, $schedule_id)) {
            // Create a new instance of updateSched and perform the edit
            $update = new updateSched($schedule_time, $schedule_id);
            if ($update->editSched()) {
                echo '<meta http-equiv="refresh" content="0; url=./schedule.php">';  // Refresh page after update
                exit(); 
            } else {
                echo 'Error editing schedule';
            }
        } else {
            echo 'Validation failed for editing schedule';
        }
    }
}







?>