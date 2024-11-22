<?php 
    class insertSched extends config{
        public $schedule_time;

        public function __construct($schedule_time)
        {
            $this->schedule_time = $schedule_time;
        }

        public function addSched() {
            $con = $this->con();
            $sql = "INSERT INTO `tbl_schedules` (`schedule_time`) VALUES ('$this->schedule_time')";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

?>