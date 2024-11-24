<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['schedule_time'], $_POST['schedule_id'])) {
    $schedule_time = $_POST['schedule_time'];
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
        $sql = "UPDATE `tbl_schedules` SET `schedule_time` = :schedule_time WHERE `schedule_id` = :schedule_id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(':schedule_time', $this->schedule_time);
        $stmt->bindParam(':schedule_id', $this->schedule_id);

        error_log("Executing SQL: $sql with schedule_time: $this->schedule_time, schedule_id: $this->schedule_id");

        if ($stmt->execute()) {
            error_log("Rows affected: " . $stmt->rowCount());
            return true;
        } else {
            error_log("Error updating schedule.");
            return false;
        }
    }
}
?>
