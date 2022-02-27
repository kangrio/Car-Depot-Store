<?php
session_start();

include("assets/php/checklogin.php");
include("assets/php/bookingrequest.php");
include("assets/php/conn.php");

$limit = 12;

$sql = "SELECT count(status) as num from booking where checkout = '0000-00-00 00:00:00'";
$result = mysqli_query($conn,$sql);


$row = mysqli_fetch_array($result);
$num = $row['num'];

if($num<$limit){
  $action = "assets/php/bookingrequest.php";
}else{
  $action = "javascript:alert('ไม่มีที่ว่างครับ');";
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
              <?php
                if (@$_SESSION['isLogin']) {
                    echo "<li><a href='history.php'>ประวัติการจอง</a></li>";
                    echo "<li><a href='booking.php' class='active'>จองที่</a></li>";
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

  <!-- ***** Login start ***** -->
  <section class="padding-top-80 margin-bottom-20">
    <div class="container register">
      <div class="row">
        <div class="col-md-12 register-right">
          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">จองที่จอด</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <form action="<?php echo $action ?>" method="post" id="form_booking">
              <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;">
              </iframe>
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading">เรายินดีพร้อมให้บริการคุณ</h3>
                <div class="row register-form">
                  <!-- <div class="col-md-12"> -->
                  <div class="col-md-6 center-text">
                    <div class="form-group">

                      <label for="carsign">ยี่ห้อ</label>
                      <select id="brand" name="brand" class="form-control" required>
                        <option value="" disabled selected>ยี่ห้อรถ</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 center-text">
                    <div class="form-group">

                      <label for="carsign">รุ่น</label>
                      <select id="model" name="model" class="form-control" required>
                        <option value="" disabled selected>รุ่น</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 center-text">
                    <div class="form-group">

                      <label for="carsign">ป้ายทะเบียน</label>
                      <input type="text" name="carsign" class="form-control" placeholder="ป้ายทะเบียนรถ *" />
                    </div>
                  </div>
                  <div class="col-md-6 center-text">
                    <div class="form-group">

                      <label for="carsign">จังหวัดป้ายทะเบียน</label>
                      <select class="form-control" name="province">
                        <option value="" selected disabled>--------- เลือกจังหวัดของป้าย ---------</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="กระบี่">กระบี่ </option>
                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                        <option value="ชัยนาท">ชัยนาท </option>
                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                        <option value="ชุมพร">ชุมพร </option>
                        <option value="ชลบุรี">ชลบุรี </option>
                        <option value="เชียงใหม่">เชียงใหม่ </option>
                        <option value="เชียงราย">เชียงราย </option>
                        <option value="ตรัง">ตรัง </option>
                        <option value="ตราด">ตราด </option>
                        <option value="ตาก">ตาก </option>
                        <option value="นครนายก">นครนายก </option>
                        <option value="นครปฐม">นครปฐม </option>
                        <option value="นครพนม">นครพนม </option>
                        <option value="นครราชสีมา">นครราชสีมา </option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                        <option value="นครสวรรค์">นครสวรรค์ </option>
                        <option value="นราธิวาส">นราธิวาส </option>
                        <option value="น่าน">น่าน </option>
                        <option value="นนทบุรี">นนทบุรี </option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                        <option value="ปทุมธานี">ปทุมธานี </option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                        <option value="ปัตตานี">ปัตตานี </option>
                        <option value="พะเยา">พะเยา </option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                        <option value="พังงา">พังงา </option>
                        <option value="พิจิตร">พิจิตร </option>
                        <option value="พิษณุโลก">พิษณุโลก </option>
                        <option value="เพชรบุรี">เพชรบุรี </option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                        <option value="แพร่">แพร่ </option>
                        <option value="พัทลุง">พัทลุง </option>
                        <option value="ภูเก็ต">ภูเก็ต </option>
                        <option value="มหาสารคาม">มหาสารคาม </option>
                        <option value="มุกดาหาร">มุกดาหาร </option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                        <option value="ยโสธร">ยโสธร </option>
                        <option value="ยะลา">ยะลา </option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                        <option value="ระนอง">ระนอง </option>
                        <option value="ระยอง">ระยอง </option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="ลพบุรี">ลพบุรี </option>
                        <option value="ลำปาง">ลำปาง </option>
                        <option value="ลำพูน">ลำพูน </option>
                        <option value="เลย">เลย </option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สงขลา">สงขลา </option>
                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                        <option value="สระแก้ว">สระแก้ว </option>
                        <option value="สระบุรี">สระบุรี </option>
                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                        <option value="สุโขทัย">สุโขทัย </option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                        <option value="สุรินทร์">สุรินทร์ </option>
                        <option value="สตูล">สตูล </option>
                        <option value="หนองคาย">หนองคาย </option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                        <option value="อุดรธานี">อุดรธานี </option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                        <option value="อุทัยธานี">อุทัยธานี </option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                        <option value="อ่างทอง">อ่างทอง </option>
                        <option value="อื่นๆ">อื่นๆ</option>
                      </select>
                    </div>
                  </div>

                <?php
                if($num<$limit){
                  ?>
                  <div class="col-md-8 text-md-center">
                      <div class="form-group">
                        <p class="btnRegister greens">ว่างอยู่ครับ</p>
                    </div>
                  </div>
                  <?php

                }else{
                  ?>
                  <div class="col-md-8 text-md-center">
                      <div class="form-group">
                        <p class="btnRegister red">ไม่มีที่ว่างครับ</p>
                    </div>
                  </div>
                  <?php

                }
                    

                ?>


                  <div class="col-md-8">
                    <div class="form-group">
                      <input name="submit" type="submit" class="btnRegister" value="ยืนยันการจอง" />
                    </div>
                  </div>
                </div>
              </div>
          </div>
          </form>
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