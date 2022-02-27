<?php
session_start();
include("../assets/php/checklogin.php");
include("../assets/php/bookingrequest.php");
include("../assets/php/conn.php");

if (@$_GET['b_id']=='' || @$_GET['status']=='') {
    header("location:index.php");
}

$b_id = $_GET['b_id'];
$status = $_GET['status'];

$sql = "SELECT * from booking natural join user where b_id = $b_id";
$result = mysqli_query($conn, $sql);

if (($row = mysqli_fetch_array($result)) == false) {
    header("location:index.php");
}

// $row = mysqli_fetch_array($result)


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
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

  <link rel="stylesheet" href="../assets/css/customstyle.css">

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
              <img src="../assets/images/logo.png" alt="Softy Pinko" />
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <?php
                if (@$_SESSION['isLogin']) {
                    echo "<li><a href='../assets/php/logout.php'>ออกจากระบบ</a></li>";
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
            <form action="assets/php/editbookingrequest.php?b_id=<?php echo $b_id?>" method="post" id="form_booking">
              <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;">
              </iframe>
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading">เรายินดีพร้อมให้บริการคุณ</h3>
                <div class="row register-form">
                  <div class="col-md-6 text-md-center">
                    <div class="form-group">
                    <label for="firstname">ชื่อ</label>
                    <p class="form-control"><?php echo $row['user_firstname'];?></p>
                    </div>
                  </div>
                  <div class="col-md-6 text-md-center">
                    <div class="form-group">
                    <label for="lastname">นามสกุล</label>
                    <p class="form-control"><?php echo $row['user_lastname'];?></p>
                    </div>
                  </div>

                  <div class="col-md-6 text-md-center">
                    <div class="form-group">
                    <label for="brand">ยี่ห้อ</label>
                    <p class="form-control"><?php echo $row['brand'];?></p>
                    </div>
                  </div>
                  <div class="col-md-6 text-md-center">
                    <div class="form-group">
                    <label for="model">รุ่น</label>
                    <p class="form-control"><?php echo $row['model'];?></p>
                    </div>
                  </div>
                  <div class="col-md-6 text-md-center">
                    <div class="form-group">
                    <label for="carsign">ป้ายรถ</label>
                    <p class="form-control"><?php echo $row['carsign'];?></p>
                    </div>
                  </div>
                  <div class="col-md-6 text-md-center">
                    <div class="form-group">
                    <label for="province">จังหวัดป้ายทะเบียน</label>
                    <p class="form-control"><?php echo $row['province'];?></p>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-group">
                      <?php
                        if ($status=='request' && $row['checkin'] == 0) {
                          ?>
                      <button class="btnRegister" type="button"
                        onclick="location.href='checkin.php?b_id=<?php echo $b_id ?>'">เข้ารับบริการ</button>
                      <?php
                        } else if($row['checkout'] == 0){
                            ?>
                      <button class="btnRegister" type="button"
                        onclick="location.href='checkout.php?b_id=<?php echo $b_id ?>'">เช็คเอาต์</button>
                      <?php
                        }else{
                          ?>
                          <button class="btnRegister" type="button"
                            onclick="location.href='index.php'">ย้อนกลับ</button>
                          <?php
    

                        }

                        ?>

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
  <script src="../assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="../assets/js/popper.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="../assets/js/scrollreveal.min.js"></script>
  <script src="../assets/js/waypoints.min.js"></script>
  <script src="../assets/js/jquery.counterup.min.js"></script>
  <script src="../assets/js/imgfix.min.js"></script>

  <!-- Global Init -->
  <script src="../assets/js/custom.js"></script>

</body>

</html>