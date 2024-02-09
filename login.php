<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" href="login2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
             <img src="job.jpg" alt="">
           <div class="text">
                    <span class="text-1">Every new friend is a <br> new adventure</span>
  <span class="text-2">Let's get connected</span>
          </div>
           </div>
       <div class="back">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
  <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
      <div class="login-form">
            <div class="title">Login</div>

            <?php if ($is_invalid): ?>
                <em>Invalid login</em>
            <?php endif; ?>

    <form method="post">
            <div class="input-boxes">
    <div class="input-box">
  <i class="fas fa-envelope"></i>
                <input type="email" name=" email" id="email" placeholder="Enter your email"   
                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
              </div>
      <div class="button input-box">
                <input type="submit" value="Sumbit">
     </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>

        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="process-signup.php" method="post" id="signup" validate>
            <div class="input-boxes">
              <div class="input-box">
          <i class="fas fa-user"></i>
                  <input type="text" id="name"  placeholder="Enter your name" name="name" required>
               </div>
               <div class="input-box">
                <i class="fas fa-envelope"></i>
     <input type="email" id="email" placeholder="Enter your email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
          <input type="password" id="password"placeholder="Enter your password" name="password" required>
              </div>
                     
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-Enter your password" required>
                          </div>
                          <div class="button input-box">
                                 
                <input type="submit" value="Sumbit">
              </div>
      <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
