<?php
require_once './php/init.php';

$con = new config();
$con->con();

// pakilagay na lang sa loob ng xampp folder --> htdocs para ma-try niyo rin tnx
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Food Bowl Tracker</title>
  <link rel="stylesheet" href="css/home.css">
  <script src="https://kit.fontawesome.com/d781878796.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- NAVIGATION -->
  <header class="navbar">
    <div class="logo"><img src="img/logo.png" alt=""></div>
    <nav>
      <a href="#" title="Home" class="_home"><i class="fa-solid fa-bell"></i></a>
      <a href="pages/schedule.php" title="Schedules" class="_sched"><i class="fa-regular fa-calendar"></i></a>
      <a href="#" title="History" class="_out"><i class="fa-regular fa-clock"></i></a>
    </nav>
  </header>

  <!-- HOME -->
  <div class="container" id="home">
    <!-- PROFILE -->
    <aside class="profile">
      <img src="https://i.imgur.com/dsV7lvm.png" alt="Pet Profile Picture" referrerpolicy="no-referrer" class="profile-pic">
      <div class="username">@username</div>
      <div class="info">
        <div class="info-item">
          <img src="https://i.imgur.com/R6vqiW0.png" referrerpolicy="no-referrer" alt="Food Icon">
          <p>Food Content: </p><span>2.3kg</span>
        </div>
        <div class="info-item">
          <img src="https://i.imgur.com/KWUXt4Q.png" referrerpolicy="no-referrer" alt="Schedule Icon">
          <p>Next Schedule: </p><span>6:30 AM</span>
        </div>
        <div class="info-item">
          <img src="https://i.imgur.com/nHRDa3O.png" referrerpolicy="no-referrer" alt="Timer Icon">
          <p>Time Remaining: </p><span>500hrs</span>
        </div>
      </div>
    </aside>
    
    <!-- LOGS -->
    <main class="logs" id="logs">
      <h2>Feed Log</h2>
      <div class="log-list">
        
        <!-- ITEM -->
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 01, 2024 • 9:50 PM</p>
            <div class="close-btn">✖</div>
          </div>
          <hr>
          <p>Your pet has eaten food from the bowl.</p>
          <p>Bowl Status: 2.3kg</p>
        </div>

        <!-- ITEM -->
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 11, 2024 • 8:50 PM</p>
            <div class="close-btn">✖</div>
          </div>
          <hr>
          <p>Your pet has eaten food from the bowl.</p>
          <p>Bowl Status: 4.3kg</p>
        </div>

      </div>
    </main>
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
      <form action="./pages/schedule.php" method="POST">
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

  <script src="js/home.js"></script>
</body>
</html>
