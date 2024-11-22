<?php
// ob_start();
include 'delete.php';

class view extends config {
    public function viewSched() {
        $con = $this->con();
        $sql = "SELECT `schedule_id`, TIME_FORMAT(`schedule_time`, '%h:%i %p') AS `formatted_time` FROM `tbl_schedules` ORDER BY `schedule_time`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $data) {
            $schedule_id = $data['schedule_id'];
            $formatted_time = $data['formatted_time']; 

            echo '<div class="sched-item">
                    <div class="sched-time">
                        <h1>' . $formatted_time . '</h1>
                    </div>
                    <div class="sched-option">
                        <button class="show-edit">
                            <a href="?editSched=' . $schedule_id . '">Edit</a>
                        </button>
                        <button type="submit" name="delete">
                            <a href="?delSched=' . $schedule_id . '">Remove</a>
                        </button>
                    </div>
                  </div>';
        }
    }
}

?>
