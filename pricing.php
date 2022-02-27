<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

  <title>Car Depot Store</title>
  <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/customstyle.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="Softy Pinko" />
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php">หน้าแรก</a></li>
              <li><a href="pricing.php" class="active">ราคา</a></li>
              <li><a href="contact.php">ติดต่อ</a></li>
              <?php
              if (@$_SESSION['isLogin']) {
                  echo "<li><a href='history.php'>ประวัติการจอง</a></li>";
                  echo "<li><a href='booking.php'>จองที่</a></li>";
                  echo "<li><a href='assets/php/logout.php'>ออกจากระบบ</a></li>";
              } else {
                  echo "<li><a href='login.php'>เข้าสู่ระบบ</a></li>";
                  echo "<li><a href='register.php'>สมัครสมาชิก</a></li>";
              }
             ?>

            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Pricing Plans Start ***** -->
  <section class="section colored" id="pricing-plans">
    <div class="container">
      <!-- ***** Section Title Start ***** -->
      <div class="row">
        <div class="col-lg-12">
          <div class="center-heading padding-top-70">
            <h2 class="section-title">ค่าบริการ</h2>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-6">
          <div class="center-text">
            <p>เราให้คุณมากกว่าที่คุณให้เรา</p>
          </div>
        </div>
      </div>
      <!-- ***** Section Title End ***** -->

      <div class="row">
        <!-- ***** Pricing Item Start ***** -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
          <div class="pricing-item">
            <div class="pricing-header">
              <h3 class="pricing-title">1 - 5 ชั่วโมง</h3>
            </div>
            <div class="pricing-body">
              <div class="price-wrapper">
                <span class="currency">&#3647;</span>
                <span class="price">20</span>
                <span class="period">ต่อชั่วโมง</span>
              </div>
              <ul class="list">
                <li>ล้างรถฟรี</li>
                <li>ดูแลความสะอาดรถ</li>
                <li>ส่งรถให้ถึงที่</li>
                <li>มีประกันปลอดที่จอด</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="booking.php" class="main-button">หาที่จอดรถ</a>
            </div>
          </div>
        </div>
        <!-- ***** Pricing Item End ***** -->

        <!-- ***** Pricing Item Start ***** -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
          <div class="pricing-item pink">
            <div class="pricing-header">
              <h3 class="pricing-title">6 - 15 ชั่วโมง</h3>
            </div>
            <div class="pricing-body">
              <div class="price-wrapper">
                <span class="currency">&#3647;</span>
                <span class="price">40</span>
                <span class="period">ต่อชั่วโมง</span>
              </div>
              <ul class="list">
                <li class="active">ล้างรถฟรี</li>
                <li class="active">ดูแลความสะอาดรถ</li>
                <li>ส่งรถให้ถึงที่</li>
                <li>มีประกันปลอดที่จอด</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="booking.php" class="main-button">หาที่จอดรถ</a>
            </div>
          </div>
        </div>
        <!-- ***** Pricing Item End ***** -->

        <!-- ***** Pricing Item Start ***** -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
          <div class="pricing-item green">
            <div class="pricing-header">
              <h3 class="pricing-title">16 - 23 ชั่วโมง</h3>
            </div>
            <div class="pricing-body">
              <div class="price-wrapper">
                <span class="currency">&#3647;</span>
                <span class="price">60</span>
                <span class="period">ต่อชั่วโมง</span>
              </div>
              <ul class="list">
                <li class="active">ล้างรถฟรี</li>
                <li class="active">ดูแลความสะอาดรถ</li>
                <li class="active">ส่งรถให้ถึงที่</li>
                <li>มีประกันปลอดที่จอด</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="booking.php" class="main-button">หาที่จอดรถ</a>
            </div>
          </div>
        </div>
        <!-- ***** Pricing Item End ***** -->

        <!-- ***** Pricing Item Start ***** -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
          <div class="pricing-item grey">
            <div class="pricing-header">
              <h3 class="pricing-title">1 วันขึ้นไป</h3>
            </div>
            <div class="pricing-body">
              <div class="price-wrapper">
                <span class="currency">&#3647;</span>
                <span class="price">75</span>
                <span class="period">ต่อชั่วโมง</span>
              </div>
              <ul class="list">
                <li class="active">ล้างรถฟรี</li>
                <li class="active">ดูแลความสะอาดรถ</li>
                <li class="active">ส่งรถให้ถึงที่</li>
                <li class="active">มีประกันปลอดที่จอด</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="booking.php" class="main-button">หาที่จอดรถ</a>
            </div>
          </div>
        </div>
        <!-- ***** Pricing Item End ***** -->
      </div>
    </div>
  </section>
  <!-- ***** Pricing Plans End ***** -->
  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <ul class="social">
            <li><a href="https://www.facebook.com/SOLAEH.BY.ME/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.facebook.com/reeduwan.salae.98"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="copyright">Copyright &copy; 2020 Car Depot Store - Masolae & Reeduwan</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>

</body>

</html>