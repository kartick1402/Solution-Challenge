<?php

session_start();

if (isset($_SESSION["user_id"])) {

  $mysqli = require __DIR__ . "/database.php";

  $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selling Dashbord</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="dashboard_style.css">
</head>

<body>
  <div class="container">
    <?php if (isset($user)) : ?>

    <?php else : ?>

      <p><a href="login.php">Log In</a> or <a href="signup.html">Sign Up</a></p>

    <?php endif; ?>
    <aside>

      <div class="top">
        <div class="logo">
          <h2>LGBTQ<span class="danger">Community</span> </h2>
        </div>
        <div class="close" id="close_btn">
          <span class="material-symbols-sharp">
            close
          </span>
        </div>
      </div>
      <!-- end top -->
      <div class="sidebar">

        <a href="index.php">
          <span class="material-symbols-sharp">grid_view </span>
          <h3>Dashbord</h3>
        </a>
        <a href="#" class="active">
          <span class="material-symbols-sharp">person_outline </span>
          <h3>Profile</h3>
        </a>
        <a href="chatconnection.php">
          <span class="material-symbols-sharp">mail_outline </span>
          <h3>Chat with Friends</h3>
          <span class="msg_count">14</span>
        </a>
        <a href="#">
          <span class="material-symbols-sharp">receipt_long </span>
          <h3>Job Opportunities & Work</h3>
        </a>
        <a href="#">
          <span class="material-symbols-sharp">settings </span>
          <h3>settings</h3>
        </a>
        <a href="logout.php">
          <span class="material-symbols-sharp">logout </span>
          <h3>logout</h3>
        </a>



      </div>

    </aside>
    <!-- --------------
        end asid
      -------------------- -->

    <!-- --------------
        start main part
      --------------- -->

    <main>
      <h1>Welcome Back</h1>
      <h2><?= htmlspecialchars($user["Name"]) ?></h2>

      <div class="recent_order">
        <h2>Your Information</h2>
        <table>
          <thead>
            <tr>
            </tr>
          </thead>
        </table>
      </div>

    </main>
    <!------------------
         end main
        ------------------->

    <!----------------
        start right main 
      ---------------------->
    <div class="right">

      <div class="top">
        <button id="menu_bar">
          <span class="material-symbols-sharp">menu</span>
        </button>

        <div class="theme-toggler">
          <span class="material-symbols-sharp active">light_mode</span>
          <span class="material-symbols-sharp">dark_mode</span>
        </div>
        <div class="profile">
          <div class="info">
            <p><b><?= htmlspecialchars($user["Name"]) ?></b></p>
            <small class="text-muted"></small>
          </div>
          <div class="profile-photo">
            <img src="profile-1.jpg" alt="" />
          </div>
        </div>
      </div>

      <div class="recent_updates">
        <h2>Profile Picture</h2>
        <div class="updates">
          <div class="update">
            <div class="profile-photo">
              <img src="jurica-koletic-7YVZYZeITc8-unsplash.jpg" alt="" />
            </div>
            <div class="message">
              <p><b>Kartick</b> Received his order of USB</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="dashboard_script.js"></script>
</body>

</html>