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
              <li><a href="login.php">เข้าสู่ระบบ</a></li>
              <li><a href="register.php" class="active">สมัครสมาชิก</a></li>
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
        <div class="col-md-3 register-left">
          <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
          <h3>ยินดีต้อนรับ</h3>
          <p>สู่การเป็นสมาชิกของเรา</p>
          <form action="login.php">
            <div class="inputlogin">
              <label for="login">มีบัญชีผู้ใช้แล้ว</label>
              <input type="submit" name="login" value="เข้าสู่ระบบ" />
            </div>
          </form>
          <br />
        </div>
        <div class="col-md-9 register-right">
          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="ho
              me-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">สมัครสมาชิก</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <form action="javascript:alert(' กรอกข้อมูลให้สมบูรณ์ ');" method="post" id="form_register">
              <iframe id="iframe_target" name="iframe_target" src="#"
                style="width:0;height:0;border:0px solid #fff;"></iframe>
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading">เรายินดีพร้อมให้บริการคุณ</h3>
                <div class="row register-form">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="firstname" type="text" class="form-control" placeholder="ชื่อ *" required />
                      <div>&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input name="lastname" type="text" class="form-control" placeholder="นามสกุล *" required />
                      <div>&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input name="username" type="text" class="form-control" id="username" placeholder="ชื่อผู้ใช้ *"
                        required />
                      <div id="usernamestatus">&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control" id="password" placeholder="รหัสผ่าน *"
                        required />
                      <div>&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="confirm_password" minlength="6"
                        placeholder="ยืนยันรหัสผ่านอีกครั้ง *" required />
                      <div id="passwordmatch">&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <div class="maxl">
                        <label class="radio inline">
                          <input type="radio" name="gender" value="ชาย" checked required>
                          <span> ชาย </span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="gender" value="หญิง" required>
                          <span> หญิง </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" id="email" placeholder="อีเมลล์ *"
                        required />
                      <div id="emailstatus">&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input name="phone" type="tel" onkeypress="javascript:return isNumber(event)" minlength="10" maxlength="10" class="form-control"
                        placeholder="เบอร์โทร *" required />
                      <div>&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input name="adress" type="text" class="form-control" placeholder="ที่อยู่ *" required />
                      <div>&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input name="birthday" type="text" onfocusin="(this.type='date')" onfocusout="(this.type='text')"
                        id="date" class="form-control" placeholder="วันเกิด *" required />
                      <div>&nbsp;</div>
                    </div>
                    <div class="form-group">
                      <input name="id_card" type="text" onkeypress="javascript:return isNumber(event)" minlength="13" maxlength="13" class="form-control"
                        placeholder="รหัสบัตรประชาชน *" required />
                      <div>&nbsp;</div>
                    </div>
                    <input type="submit" class="btnRegister" value="สมัครสมาชิก" />
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

  <script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script>

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