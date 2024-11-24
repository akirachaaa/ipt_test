<?php
require_once 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_time']) && isset($_POST['schedule_id'])) {
    $schedule_time = $_POST['edit_time'];
    $schedule_id = $_POST['schedule_id'];

    error_log("Received schedule_time: $schedule_time, schedule_id: $schedule_id");

    $update = new updateSched($schedule_time, $schedule_id);
    if ($update->editSched()) {
        header("Location: ./schedule.php");
        exit(); 
    } else {
        echo "Failed to update schedule.";
    }
}


class updateSched extends config {
    private $schedule_time;
    private $schedule_id;

    public function __construct($schedule_time, $schedule_id) {
        $this->schedule_time = $schedule_time;
        $this->schedule_id = $schedule_id;
    }

    public function editSched() {
        $con = $this->con();
        $sql = "UPDATE `tbl_schedules` SET `schedule_time` = STR_TO_DATE(:schedule_time, '%h:%i %p') WHERE `schedule_id` = :schedule_id";
        $data = $con->prepare($sql);
    
        // Bind parameters using $this->schedule_time and $this->schedule_id
        $data->bindParam(':schedule_time', $this->schedule_time);
        $data->bindParam(':schedule_id', $this->schedule_id);
    
        // Execute the query and return the result
        return $data->execute();
    }
    
}
?>
