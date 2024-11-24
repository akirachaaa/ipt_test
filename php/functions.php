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
    if (isset($_POST['edit_schedule'], $_POST['schedule_id'], $_POST['schedule_time'])) {
        $schedule_id = $_POST['schedule_id'];
        $schedule_time = $_POST['schedule_time'];

        error_log("Submitted Schedule ID: $schedule_id");
        error_log("Submitted Schedule Time: $schedule_time");

        try {
            $update = new updateSched($schedule_time, $schedule_id);
            if ($update->editSched()) {
                header("Location: ./schedule.php");
                exit();
            } else {
                echo 'Error editing schedule';
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}




?>