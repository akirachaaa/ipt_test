<?php
class viewFoodSched extends config {
    public function viewFoodAndNextSchedule() {
        $con = $this->con();

        try {
            // Query for the latest food content
            $foodQuery = "SELECT `bowl_weight` FROM `tbl_bowl_status` ORDER BY `notif_date` DESC LIMIT 1";
            $foodStmt = $con->prepare($foodQuery);
            $foodStmt->execute();
            $foodRow = $foodStmt->fetch(PDO::FETCH_ASSOC);
            $foodContent = $foodRow ? $foodRow['bowl_weight'] . "kg" : "N/A";

            // Query for the next schedule
            $scheduleQuery = "SELECT * FROM `tbl_bowl_status` ORDER BY `notif_date` DESC LIMIT 1";
            $scheduleStmt = $con->prepare($scheduleQuery);
            $scheduleStmt->execute();
            $scheduleRow = $scheduleStmt->fetch(PDO::FETCH_ASSOC);
            $nextSchedule = $scheduleRow ? $scheduleRow['notif_date'] : "No Upcoming Schedule";

            if ($nextSchedule && $nextSchedule !== "No Upcoming Schedule") {
                // Format the time into 12-hour format
                $notifDate = new DateTime($nextSchedule);
                $formattedTime = $notifDate->format('g:i A');  // 12-hour format with AM/PM
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