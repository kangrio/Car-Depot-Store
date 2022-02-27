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
  <link href="https://fonts.googleapis.com/css?family=K2D:100,300,400,500,700,800" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet"> -->

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
              <li><a href="pricing.php">ราคา</a></li>
              <li><a href="contact.php" class="active">ติดต่อ</a></li>
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


  <!-- ***** Contact Us Start ***** -->
  <section class="section colored" id="contact-us">
    <div class="container">
      <!-- ***** Section Title Start ***** -->
      <div class="row">
        <div class="col-lg-12">
          <div class="center-heading">
            <h2 class="section-title">ช่องทางการเข้าถึง Car Depot Store</h2>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-6">
          <div class="center-text">
            <p>คุณลูกค้าสามารถติดต่อปรึกษาหรือให้คำเเนะนำผ่านช่องทางนี้ได้เลย</p>
          </div>
        </div>
      </div>
      <!-- ***** Section Title End ***** -->

      <div class="row">
        <!-- ***** Contact Text Start ***** -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h5 class="margin-bottom-30">ช่องทางการติดต่อ</h5>
          <div class="contact-text">
            <p><a href="https://www.facebook.com/SOLAEH.BY.ME/">Facebook Masolae Sanijehna</a>
              <br><a href="https://www.facebook.com/reeduwan.salae.98">Facebook จีวอน ชาดำ</a> </p>

            <p>Talephone number 0992991999</p>
          </div>
        </div>
        <!-- ***** Contact Text End ***** -->

        <!-- ***** Contact Form Start ***** -->
        <div class="col-lg-8 col-md-6 col-sm-12">
          <div class="contact-form">
            <form id="contact" action="assets/php/contactrequest.php" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="name" placeholder="หัวข้อ" required="">
                  </fieldset>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="email" class="form-control" id="email" placeholder="อีเมลล์" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="ข้อความ"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="main-button">ส่งข้อความ</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- ***** Contact Form End ***** -->
      </div>
    </div>
  </section>
  <!-- ***** Contact Us End ***** -->

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