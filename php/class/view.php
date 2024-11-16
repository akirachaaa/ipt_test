<?php
class view extends config {
    public function viewSched() {
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_schedules` ORDER BY `schedule_time`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $data) {
            echo '<div class="sched-item">
                    <div class="sched-time">
                        <h1>'.$data['schedule_time'].'</h1>
                    </div>
                    <div class="sched-option">
                        <button id="show-edit">Edit</button>
                        <button id="remove">Remove</button>
                    </div>
                  </div>';
        }
        
    }
}

?>