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
              <li><a href="index.php" class="active">หน้าแรก</a></li>
              <li><a href="pricing.php">ราคา</a></li>
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

  <!-- ***** Welcome Area Start ***** -->
  <div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <?php
          if(@$_SESSION['isLogin']){
            ?>
            <h1>สวัสดีคุณ <?php echo "<br>".$_SESSION['user_firstname']." ".$_SESSION['user_lastname']; ?></h1>
            <?php
          }

          ?>
            <h1><strong>Welcome to</strong><br>Car Depot Store</h1>
            <p>ไม่มีที่จอดรถใช่ไหมเราช่วยหาที่จอดให้คุณได้<br>เรื่องความปลอดภัยไว้ใจเรา<br>เพราะคุณคือคนสำคัญ</p>
            <a href="booking.php" class="main-button-slider">หาที่จอดรถ</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Header Text End ***** -->
  </div>
  <!-- ***** Welcome Area End ***** -->

  <!-- ***** Features Small Start ***** -->
  <section class="section home-feature">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- ***** Features Small Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12"
              data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
              <div class="features-small-item">
                <div class="icon">
                  <i><img src="assets/images/featured-item-01.png" alt=""></i>
                </div>
                <h5 class="features-title">บริการเร็วบริการดี</h5>
                <p>แค่คุณเอารถมาฝากให้เรา เราจะช่วยหาที่ให้คุณทันที</p>
              </div>
            </div>
            <!-- ***** Features Small Item End ***** -->

            <!-- ***** Features Small Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12"
              data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
              <div class="features-small-item">
                <div class="icon">
                  <i><img src="assets/images/featured-item-01.png" alt=""></i>
                </div>
                <h5 class="features-title">เรื่องความปลอดภัยเรายืนหนึ่ง</h5>
                <p>เรามีระบบรักษาความปลอดภัยที่ทันสมัยและเข้มงวด</p>
              </div>
            </div>
            <!-- ***** Features Small Item End ***** -->

            <!-- ***** Features Small Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12"
              data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
              <div class="features-small-item">
                <div class="icon">
                  <i><img src="assets/images/featured-item-01.png" alt=""></i>
                </div>
                <h5 class="features-title">ฝากเร็วฝากง่ายตามใจลูกค้า</h5>
                <p>ด้วยค่าบริการถูกและปลอดภัยกว่า</p>
              </div>
            </div>
            <!-- ***** Features Small Item End ***** -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Small End ***** -->

  <!-- ***** Home Parallax Start ***** -->
  <section class="mini" id="work-process">
    <div class="mini-content">
      <div class="container">
        <div class="row">
          <div class="offset-lg-3 col-lg-6">
            <div class="info">
              <h1>Car Depot Store</h1>
              <p>หนึ่งเดี่ยวที่คุณต้องการ</p>
            </div>
          </div>
        </div>

        <!-- ***** Mini Box Start ***** -->
        <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
            <a href="booking.php" class="mini-box">
              <i><img src="assets/images/work-process-item-01.png" alt=""></i>
              <strong>รวดเร็ว</strong>
              <span>เพราะเราคือThe flash</span>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-6">
            <a href="booking.php" class="mini-box">
              <i><img src="assets/images/work-process-item-01.png" alt=""></i>
              <strong>ทันใจ</strong>
              <span>เพราะเราฝากใจไว้กับคุณแล้ว</span>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-6">
            <a href="booking.php" class="mini-box">
              <i><img src="assets/images/work-process-item-01.png" alt=""></i>
              <strong>ดี</strong>
              <span>เรื่องคุณภาพดีไว้ใจเรา</span>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-6">
            <a href="booking.php" class="mini-box">
              <i><img src="assets/images/work-process-item-01.png" alt=""></i>
              <strong>ปลอดภัย</strong>
              <span>เรื่องSafetyเรายืนหนึ่ง</span>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-6">
            <a href="booking.php" class="mini-box">
              <i><img src="assets/images/work-process-item-01.png" alt=""></i>
              <strong>บริการ</strong>
              <span>เพราะเราคือยอดเเห่งการบริการ</span>
            </a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-6">
            <a href="booking.php" class="mini-box">
              <i><img src="assets/images/work-process-item-01.png" alt=""></i>
              <strong>หายห่วง</strong>
              <span>รวดเร็วทันใจสบายใจหายห่วง</span>
            </a>
          </div>
          <!-- <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>Launch</strong>
                            <span>Godard pabst prism fam cliche.</span>
                        </a>
                    </div> -->
        </div>
        <!-- ***** Mini Box End ***** -->
      </div>
    </div>
  </section>
  <!-- ***** Home Parallax End ***** -->

  <!-- ***** Testimonials Start ***** -->
  <section class="section" id="testimonials">
    <div class="container">
      <!-- ***** Section Title Start ***** -->
      <div class="row">
        <div class="col-lg-12">
          <div class="center-heading">
            <h2 class="section-title">รีวิวการใช้บริการ</h2>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-6">
          <div class="center-text">
            <p>ยอดรีวิวจากลูกค้าที่เข้ามาใช้บริการ</p>
          </div>
        </div>
      </div>
      <!-- ***** Section Title End ***** -->

      <div class="row">
        <!-- ***** Testimonials Item Start ***** -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="team-item">
            <div class="team-content">
              <i><img src="assets/images/testimonial-icon.png" alt=""></i>
              <p>ไปใช้บริการมาเเล้วครับพนักงานบริการดีมากใส่ใจทุกรายละเอียด</p>
              <div class="user-image">
                <img whidth="60px" height="60px" src="assets\images\big.jpg" alt="">
              </div>
              <div class="team-info">
                <h3 class="user-name">บิ๊กตู่</h3>
                <span>ประหยัด จันทร์ถึงศุกร</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Testimonials Item End ***** -->

        <!-- ***** Testimonials Item Start ***** -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="team-item">
            <div class="team-content">
              <i><img src="assets/images/testimonial-icon.png" alt=""></i>
              <p>เรื่องฝากรถเเนะนำที่นี้เลยคะความปลอดภัยสูงค่าบริการก็สบายกระเป๋า</p>
              <div class="user-image">
                <img whidth="60px" height="60px" src="assets\images\par.jpg" alt="">
              </div>
              <div class="team-info">
                <h3 class="user-name">ปารีณา</h3>
                <span>ปารีณา ค้างทุกเรื่อง</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Testimonials Item End ***** -->

        <!-- ***** Testimonials Item Start ***** -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="team-item">
            <div class="team-content">
              <i><img src="assets/images/testimonial-icon.png" alt=""></i>
              <p>ฝากเร็วฝากง่ายจริงด้วยเเค่กรอบข้อมูลพนักงานก็จะบริการให้เราทุกอยางเลยคะ</p>
              <div class="user-image">
                <img src="http://placehold.it/60x60" alt="">
              </div>
              <div class="team-info">
                <h3 class="user-name">ไพศาล</h3>
                <span>ไพศาล เอื้ออำนวย</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Testimonials Item End ***** -->
      </div>
    </div>
  </section>
  <!-- ***** Testimonials End ***** -->

  <!-- ***** Counter Parallax Start ***** -->
  <section class="counter">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="count-item decoration-bottom">
              <strong>2.2</strong><p>แสนคน<p>
              <span>ฐานลูกค้า</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="count-item decoration-top">
              <strong>2.5</strong><p>ล้านคน</p>
              <span>ลูกค้าที่ใช้บริการ</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="count-item decoration-bottom">
              <strong>18</strong><p>รางวัล</p>
              <span>รางวัลที่ได้</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="count-item">
              <strong>27</strong><p>สาขา</p>
              <span>มีสาขาทั้งหมด</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Counter Parallax End ***** -->

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