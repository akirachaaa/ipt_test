<?php
// ob_start();
include 'delete.php';

class view extends config {
    public function viewSched() {
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_schedules` ORDER BY `schedule_time`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $data) {
            $schedule_id = $data['schedule_id']; 

            echo '<div class="sched-item">
                    <div class="sched-time">
                        <h1>'.$data['schedule_time'].'</h1>
                    </div>
                    <div class="sched-option">
                        <button id="show-edit" type="submit" name="submit">Edit</button>
                        <button type="submit" name="delete">
                            <a href="?delSched='.$schedule_id.'">Remove</a>
                        </button>
                    </div>
                  </div>';
        }
        
    }
}



?>