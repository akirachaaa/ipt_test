<?php
class viewFoodSched extends config {
    public function viewFoodAndNextSchedule() {
        $con = $this->con();

        try {
            $foodQuery = "SELECT `bowl_weight` FROM `tbl_bowl_status` ORDER BY `notif_date` DESC LIMIT 1";
            $foodStmt = $con->prepare($foodQuery);
            $foodStmt->execute();
            $foodRow = $foodStmt->fetch(PDO::FETCH_ASSOC);
            $foodContent = $foodRow ? $foodRow['bowl_weight'] . "g" : "N/A";

            $scheduleQuery = "SELECT notif_date FROM tbl_bowl_status WHERE notif_date > NOW() ORDER BY notif_date ASC LIMIT 1";
            $scheduleStmt = $con->prepare($scheduleQuery);
            $scheduleStmt->execute();
            $scheduleRow = $scheduleStmt->fetch(PDO::FETCH_ASSOC);
            $nextSchedule = $scheduleRow ? $scheduleRow['notif_date'] : "No Upcoming Schedule";

            if ($nextSchedule && $nextSchedule !== "No Upcoming Schedule") {
                $notifDate = new DateTime($nextSchedule);
                $formattedTime = $notifDate->format('g:i A'); 
            } else {
                $formattedTime = $nextSchedule;
            }

            // Display the food content and next schedule
            echo "<div class='info'>";
            echo "<div class='info-item'>";
            echo "<img src='https://i.imgur.com/R6vqiW0.png' referrerpolicy='no-referrer' alt='Food Icon'>";
            echo "<p>Food Content: &nbsp;</p><span>" . $foodContent . "</span>";
            echo "</div>";
            echo "<div class='info-item'>";
            echo "<img src='https://i.imgur.com/KWUXt4Q.png' referrerpolicy='no-referrer' alt='Schedule Icon'>";
            echo "<p>Next Schedule: &nbsp;</p><span>" . $formattedTime . "</span>";
            echo "</div>";
            echo "</div>";

        } catch (PDOException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    }
}
?>