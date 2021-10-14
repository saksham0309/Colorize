<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-121x121.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Your Lists</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu cid-s48OLK6784" once="menu" id="menu1-o">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobiri.se">
                        <img src="assets/images/mbr-121x121.png" alt="Colorize" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-5" href="index.php">COLORIZE</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="index.php">Home</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="account.php">My Lists</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="logout.php">Logout</a></li></ul>
                
                
            </div>
        </div>
    </nav>

</section>

<section class="content6 cid-saGV2CZuCP" id="content6-v">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <hr class="line">
                <p class="mbr-text align-center mbr-fonts-style my-4 display-5">MY LISTS</p>
                <hr class="line">
            </div>
        </div>
    </div>
</section>

<section class="content5 cid-saGV4rXG5p" id="content5-w">
    
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-12 col-lg-10">
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">
                
                Hello ! <?php echo $_SESSION['email']?>
                <br>Create your lists
                </h4>
                <p class="mbr-text mbr-fonts-style display-7">
                Start creating your lists!</p>
            </div>
        </div>
    </div>
</section>

<section class="content8 cid-saGV58lvt5" id="content8-x">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="counter-container col-md-12 col-lg-10">
                
                <div class="mbr-text mbr-fonts-style display-7">
                    <ul>
                        <li><a href="l1.php"><strong>Grocery List</strong></a></li>
                        <li><a href="l2.php"><strong>Camping List</strong></a></li>
                        <li><a href="l3.php"><strong>Assignment List</strong></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info1 cid-saGVTmgbT9 mbr-parallax-background" id="info1-y">
    
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1">
                    <strong>Save your lists</strong></h3>
                
                <div class="mbr-section-btn"><a class="btn btn-secondary display-4" href="login.php">Login</a> <a class="btn btn-secondary display-4" href="signup.php">Signup</a></div>
            </div>
        </div>
    </div>
</section>

<section class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-p">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="contact.php" class="text-primary">Contact </a><a href="contact.php" class="text-primary">us</a></li><li class="foot-menu-item mbr-fonts-style display-7"></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Made with &lt;3 by Team Colorize.
                </p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/w" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Made with Mobirise - <a href="https://mobirise.site/m" style="color:#aaa;">See it</a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/parallax/jarallax.min.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
</body>
</html>