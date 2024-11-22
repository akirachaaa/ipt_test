<?php
class delete extends config {
    public $schedule_id;

    public function __construct($schedule_id) {
        $this->schedule_id = $schedule_id;
    }

    public function delSched() {
        $con = $this->con();
        $sql = "DELETE FROM `tbl_schedules` WHERE `schedule_id` = :schedule_id";
        $data = $con->prepare($sql);
        $data->bindParam(':schedule_id', $this->schedule_id, PDO::PARAM_INT);
        
        if ($data->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
