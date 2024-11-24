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
    if (isset($_POST['edit_schedule']) && isset($_POST['schedule_id'])) {
        $schedule_id = $_POST['schedule_id'];
        $schedule_time = $_POST['schedule_time']; // 24-hour time format

        // Debugging: Check the values retrieved from POST
        echo "Submitted Schedule ID: $schedule_id <br>";
        echo "Submitted Schedule Time (24-hour format): $schedule_time <br>";

        // Convert 24-hour time to 12-hour format with AM/PM
        $dateTime = new DateTime($schedule_time); // Create DateTime object
        $formattedTime = $dateTime->format('h:i A'); // 12-hour format with AM/PM

        // Debugging: Check formatted time
        echo "Formatted Schedule Time (12-hour format): $formattedTime <br>";

        $valid = new validate(); // Validation class instance

        if ($valid->valEditSched($schedule_time, $schedule_id)) {
            $update = new updateSched($formattedTime, $schedule_id); // Pass formatted time
            if ($update->editSched()) {
                echo '<meta http-equiv="refresh" content="0; url=./schedule.php">';
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