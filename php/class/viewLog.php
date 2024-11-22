<?php 
class viewLog extends config {
    public function viewLog() {
        $con = $this->con();
        $sql = "SELECT `notif_date`, `bowl_msg`, `bowl_weight` FROM `tbl_bowl_status` WHERE DATE(`notif_date`) = CURDATE() ORDER BY `notif_date`";
        $data = $con->prepare($sql);

        try {
            $data->execute();
            
            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                $notifDate = new DateTime($row['notif_date']);
                $formattedDate = $notifDate->format('F d, Y • g:i A'); 

                if (isset($row['bowl_msg'])) {
                    $message = $row['bowl_msg'];   
                } else {
                    $message = "No message available";  
                }

                $bowlWeight = isset($row['bowl_weight']) ? $row['bowl_weight'] : "Unknown";  

                echo '<div class="log-item">
                        <div class="log-top">
                          <p class="log-date">' . $formattedDate . '</p>
                        </div>  
                        <hr>
                        <p class="log-msg">' . $message . '</p>
                        <p class="log-stat">Bowl Status: '.$bowlWeight.'g</p>
                      </div>';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
