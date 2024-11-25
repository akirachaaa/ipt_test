<?php
require_once '../php/init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Food Bowl Tracker</title>
  <link rel="stylesheet" href="../css/history.css">
  <script src="https://kit.fontawesome.com/d781878796.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- NAVIGATION -->
  <header class="navbar">
    <div class="logo"><a href="../index.php"><img src="../img/logo.png" alt=""></a></div>
    <nav>
      <a href="../index.php" title="Home" class="_home"><i class="fa-regular fa-bell"></i></a>
      <a href="./schedule.php" title="Schedules" class="_sched"><i class="fa-regular fa-calendar"></i></a>
      <a href="#" title="History" class="_out"><i class="fa-solid fa-clock"></i></a>
    </nav>
  </header>

  <div class="container">
    <!-- LOGS -->
    <main class="logs" id="logs">
      <h2>Log History</h2>
      <div class="log-list">
        
        <!-- ITEM -->
         <?php
            $viewH = new viewHistory();
            $viewH->viewHistory();
        ?>

        <!-- ITEM -->
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 11, 2024 • 8:50 PM</p>
          </div>
          <p class="log-msg">Your pet has eaten food from the bowl.</p>
          <p class="log-stat">Bowl Status: 4.3kg</p>
        </div>

        <!-- ITEM -->
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 12, 2024 • 8:50 PM</p>
          </div>
          <p class="log-msg">Your pet has eaten food from the bowl.</p>
          <p class="log-stat">Bowl Status: 4.3kg</p>
        </div>
        
      </div>
    </main>
  </div>

  <!-- ADD BUTTON -->
  <!-- <div class="add">
    <button id="show-popup">+</button>
  </div> -->

  <!-- POPUP -->
  <!-- <div class="popup">
    <div class="close-btn">✖</div>
    <div class="form">
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
  </div> -->

  <script src="../js/home.js"></script>
</body>
</html>