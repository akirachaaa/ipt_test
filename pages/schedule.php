<?php
require_once '../php/init.php';

    include('../php/class/config.php');
    
    try {
        $con = new Config();

        $query = "SELECT `schedule_time` FROM `tbl_schedules` ORDER BY `schedule_id` DESC LIMIT 1";
        $stmt = $con->con()->prepare($query);
        $stmt->execute();

        // Fetch the result
        $currentSchedule = $stmt->fetch(PDO::FETCH_ASSOC);

        // If a schedule is found, display it; otherwise, display an error message
        if ($currentSchedule) {
            $currentScheduleTime = $currentSchedule['schedule_time'];
        } else {
            $currentScheduleTime = "No schedule found.";
        }
    } catch (PDOException $e) {
        // Catch any database connection errors
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feeder Schedule</title>
    <link rel="stylesheet" href="../css/schedule.css">
    <script src="https://kit.fontawesome.com/91416c0cd2.js" crossorigin="anonymous"></script>
    <script src="../js/schedule.js"></script>
</head>
<body>
    <!-- NAVIGATION -->
    <header class="navbar">
        <div class="logo"><a href="../index.php"><img src="../img/logo.png" alt=""></a></div>
        <nav>
        <a href="../index.php" title="Home" class="_home"><i class="fa-regular fa-bell"></i></a>
        <a href="#" title="Schedules" class="_sched"><i class="fa-solid fa-calendar-days"></i></a>
        <a href="./history.php" title="History" class="_out"><i class="fa-regular fa-clock"></i></a>
        </nav>
    </header>

    <!-- SCHEDULE -->
    <div class="container">
        <main class="scheds">
            <h2>Feed Schedules</h2>
            <div class="sched-list">

                <!-- ITEM -->
                <?php 
                    $view = new view();
                    $view->viewSched(); 
                    delSchedMsg();
                    ?> 

            </div>
        </main>
    </div>

    <!-- SCHED POPUP -->
    <div class="edit-popup">
    <div class="close-btn">✖</div>
    <div class="form">
        <?php editSchedMsg(); ?>
        <h2>Edit Schedule</h2>
        <form action="" method="POST">
            <div class="form-element">
                <label for="time-edit">Set New Time:</label>
                <input type="time" id="time-edit" name="edit_time" step="60" value="00:00" required>
            </div>
            <?php $schedule_id = isset($_GET['editSched']) ? $_GET['editSched'] : ''; ?>
            <input type="hidden" name="schedule_id" value="<?php echo $schedule_id; ?>">

            <div class="form-element">
                <input type="submit" value="Edit" name="edit_time">
            </div>
        </form>
        </div>
    </div>


    <!-- ADD BUTTON -->
    <div class="add">
        <button id="show-popup">+</button>
    </div>

    <!-- POPUP -->
    <div class="popup">
        <div class="close-btn">✖</div>
        <div class="form">
        <?php addSchedMsg(); ?>
        <h2>Add Schedule</h2>
        <form action="" method="POST">
            <div class="form-element">
            <label for="time">Set Time:</label>
            <input type="time" id="time" name="add_time" step="60" value="00:00">
            </div>
            <div class="form-element">
            <input type="submit" value="ADD" name="submit">
            </div>
        </form>
        </div>
    </div>

    <script src="../js/schedule.js"></script>
</body>
</html>