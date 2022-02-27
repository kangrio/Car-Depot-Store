<?php
session_start();
if (@$_SESSION['isLogin']) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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
              <li><a href="contact.php">ติดต่อ</a></li>
              <li><a href="login.php" class="active">เข้าสู่ระบบ</a></li>
              <li><a href='register.php'>สมัครสมาชิก</a></li>
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

  <!-- ***** Login start ***** -->
  <section class="login-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">เข้าสู่ระบบ</h2>
          <form class="login-form" action="assets/php/loginrequest.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-uppercase">ชื่อผู้ใช้</label>
              <input name="username" type="text" class="form-control" placeholder="ป้อนชื่อผู้ใช้" required>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">รหัสผ่าน</label>
              <input name="password" type="password" class="form-control" placeholder="ป้อนรหัสผ่าน" required>
            </div>


            <div class="form-check">
              <!-- <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>จำฉันไว้</small>
    </label> -->
              <button type="submit" class="btn btn-login float-right">เข้าสู่ระบบ</button>
            </div>

          </form>
          <a class="copy-text" href="register.php"> ยังไม่มีบัญชี สมัครสมาชิก</a>
          <!-- <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div> -->
        </div>
        <div class="col-md-8 banner-sec">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="assets/images/pexels-photo.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <div class="banner-text">
                    <h2>บริการเร็วบริการดี</h2>
                    <p>แค่คุณเอารถมาฝากให้เรา เราจะช่วยหาที่ให้คุณทันที</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="assets/images/people-coffee-tea-meeting.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <div class="banner-text">
                    <h2>เรื่องความปลอดภัยเรายืนหนึ่ง</h2>
                    <p>เรามีระบบรักษาความปลอดภัยที่ทันสมัยและเข้มงวด</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="assets/images/pexels-photo-872957.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <div class="banner-text">
                    <h2>ฝากเร็วฝากง่ายตามใจลูกค้า</h2>
                    <p>ด้วยค่าบริการถูกและปลอดภัยกว่า</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
  </section>
  <!-- ***** Login End ***** -->
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