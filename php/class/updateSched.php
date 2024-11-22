<?php 
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
        $data = $con->prepare($sql);
        // Bind parameters using $this->schedule_time and $this->schedule_id
        $data->bindParam(':schedule_time', $this->schedule_time);
        $data->bindParam(':schedule_id', $this->schedule_id);
        // Execute the query and return the result
        return $data->execute();
    }
}
?>
