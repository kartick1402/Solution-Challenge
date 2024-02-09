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
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lgbtq Community Health main</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script>
        window.embeddedChatbotConfig = {
        chatbotId: "9cQATty_oeVx8BhFHmQZp",
        domain: "www.chatbase.co"
        }
        </script>
        <script
        src="https://www.chatbase.co/embed.min.js"
        chatbotId="9cQATty_oeVx8BhFHmQZp"
        domain="www.chatbase.co"
        defer>
        </script>
</head>
<body>
    

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand">LGBTQ COMMUNITY</a>
            <div>
    </div>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
      </nav>
      
    <!-- navbar ends  -->
        <section class=" services-section">
        <?php if (isset($user)): ?>
        
        <h1>Hello <?= htmlspecialchars($user["Name"]) ?></h1>
        
        <p><a href="logout.php"><button id="buggi" class="btn btn-outline-success" type="submit">Log out</button></a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
            <div class="container text-center common-title fw-bold">
                <h2 class="common-heading">OUR Services for<br>LGBTQ COMMUNITY</h2>
                <hr class="w-25 mx-auto ">
            </div>
    
            <div class="container mt-5"> 
                <div class="row g-5 ">
                    <div class="col-xxl-4 col-lg-4 col-12 ">
                        <div class=" card-box rounded-2 p-5 text-center">
                            <img alt="GIF Image" class="img-fluid" src="img/suitcase (1).png" width="200px">
    
                            <h5 class="my-3 fw-normal "> Explore Job Opportunity
    
                            </h5>
                            <p class="pe-3 mb-5">
                                Different job roles  available in different domains
                            </p>
                            <a href="./inedx.html" target="_blank"><button type="button" class="btn btn-success">Explore</button></a>
                            <div class="  d-flex justify-content-center align-items-center ">
                                <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"
                                    href="">
                                    <i class="fa-solid fa-arrow-right"> </i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xxl-4 col-lg-4 col-12  ">
                        <div class=" card-box rounded-2 p-5 text-center shadow">
                            <img alt="" class="img-fluid" src="img/healthcare.png" width="200px">
    
                            <h5 class="my-3 fw-normal"> Explore healthcare benefits  </h5>
                            <p class="pe-3 mb-5">
                                different healthcare facility available from the best professionals of healthcare 
                            </p>
                            <a href="./index2.html" target="_blank"><button type="button" class="btn btn-success">Explore</button></a>
                            <div class="  d-flex justify-content-center align-items-center ">
                                <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"
                                    href="">
                                    <i class="fa-solid fa-arrow-right"> </i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xxl-4 col-lg-4 col-12 ">
                        <div class=" card-box rounded-2 p-5 text-center">
                            <img alt="GIF Image" class="img-fluid" src="img/link.png" width="200px">
                            <h5 class="my-3 fw-normal ">connect with your  peer </h5>
                            <p class="pe-3 mb-5">
                                live chats with your beloved ones 
                            </p>
                            <a href="chatconnection.php"><button type="button" class="btn btn-success">Explore</button></a>
                            <div class="  d-flex justify-content-center align-items-center ">
                                <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"
                                    href="">
                                    <i class="fa-solid fa-arrow-right"> </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    
</body>
</html>
