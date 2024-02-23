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
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="dashboard_style.css">
</head>

<body>
  <div class="container">
    <?php if (isset($user)): ?>
        
                
    <?php else: ?>
        
        <p><a href="login.php">Log In</a> or <a href="signup.html">Sign Up</a></p>
        
    <?php endif; ?>
    <aside>

      <div class="top">
        <div class="logo">
          <h2>LGBTQ<span class="danger"> Community</span> </h2>
        </div>
        <div class="close" id="close_btn">
          <span class="material-symbols-sharp">
            close
          </span>
        </div>
      </div>
      <!-- end top -->
      <div class="sidebar">

        <a href="index.php" class="active">
          <span class="material-symbols-sharp">grid_view </span>
          <h3>Dashbord</h3>
        </a>
        <a href="profile.php">
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
      <h1>Dashbord</h1>

      <div class="date">
        <input type="date">
      </div>

      <div class="insights">

        <!-- start seling -->
        <div class="sales">
          <span class="material-symbols-sharp">trending_up</span>
          <div class="middle">

            <div class="left">
              <h3>Total Sales</h3>
              <h1>Rs0</h1>
            </div>
            <div class="progress">
              <svg>
                <circle r="0" cy="0" cx="0"></circle>
              </svg>
              <div class="number">
                <p>0%</p>
              </div>
            </div>

          </div>
          <small>Last Month</small>
        </div>
        <!-- end seling -->
        <!-- start expenses -->
        <div class="expenses">
          <span class="material-symbols-sharp">local_mall</span>
          <div class="middle">

            <div class="left">
              <h3>Total Sales</h3>
              <h1>Rs10,024</h1>
            </div>
            <div class="progress">
              <svg>
                <circle r="30" cy="40" cx="40"></circle>
              </svg>
              <div class="number">
                <p>80%</p>
              </div>
            </div>

          </div>
          <small>Last 24 Hours</small>
        </div>
        <!-- end seling -->
        <!-- start seling -->
        <div class="income">
          <span class="material-symbols-sharp">stacked_line_chart</span>
          <div class="middle">

            <div class="left">
              <h3>Total Sales</h3>
              <h1>Rs2,024</h1>
            </div>
            <div class="progress">
              <svg>
                <circle r="30" cy="40" cx="40"></circle>
              </svg>
              <div class="number">
                <p>80%</p>
              </div>
            </div>

          </div>
          <small>Last 2 Hours</small>
        </div>
        <!-- end seling -->

      </div>
      <!-- end insights -->
      <div class="recent_order">
        <h2>Recent Orders</h2>
        <table>
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Product Number</th>
              <th>Payments</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jute gifts bags </td>
              <td>4563</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Jute Bags for lunch</td>
              <td>4563</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Handcrafted jute bags</td>
              <td>4563</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Multicolor jute bags</td>
              <td>4563</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
          </tbody>
        </table>
        <a href="#">Show All</a>
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
        <h2>Recent Update</h2>
        <div class="updates">
          <div class="update">
            <div class="profile-photo">
              <img src="jurica-koletic-7YVZYZeITc8-unsplash.jpg" alt="" />
            </div>
            <div class="message">
              <p><b>Kartick</b> Received his order of USB</p>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="albert-dera-ILip77SbmOE-unsplash.jpg" alt="" />
            </div>
            <div class="message">
              <p><b>Prateek</b> Received his order of Sunglasses</p>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="profile-3.jpg" alt="" />
            </div>
            <div class="message">
              <p><b>Kavita</b> Received her order of Bedsheet</p>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="profile-3.jpg" alt="" />
            </div>
            <div class="message">
              <p><b>Sweta</b> Received her order of utensils</p>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="profile-3.jpg" alt="" />
            </div>
            <div class="message">
              <p><b>Kabir</b>Received his order of shoes</p>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="profile-3.jpg" alt="" />
            </div>
            <div class="message">
              <p><b>Mahak</b>Received her order of lipstick</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="dashboard_script.js"></script>
</body>

</html>