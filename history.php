<?php
session_start();
include "assets/php/checklogin.php";
include "assets/php/conn.php";
include "assets/php/cancelbooking.php";

@$category = $_POST['category'];

if($category == ''){
  $sql = "select * from booking where (status = 'service' or status = 'request') and user_id=" . $_SESSION["user_id"]." ORDER BY bookingtime DESC";
  
}elseif($category == 'service'){
  $sql = "select * from booking where (status = 'service') and user_id=" . $_SESSION["user_id"]." ORDER BY bookingtime DESC";
  
}else{
  $sql = "select * from booking where (status = 'request') and user_id=" . $_SESSION["user_id"]." ORDER BY bookingtime DESC";
  
}

$result = mysqli_query($conn, $sql);


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
                    echo "<li><a href='history.php' class='active'>ประวัติการจอง</a></li>";
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

  <!-- ***** Login start ***** -->
  <section class="padding-top-80 margin-bottom-20">
    <div class="container register">
      <div class="row">
        <div class="col-md-12 register-right">
          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">
                <h3 >ประวัติการจอง</h3>
              </a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h3 class="register-heading">ประวัติการจอง</h3><br>
              <div class="row history-form">

              <div class="col-md-4">
                  <div class="form-group">
                    <form action="" method="post">
                    <button name="category" type="submit" value="request" class="form-control">ยังไม่เข้ารับบริการ</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <form action="" method="post">
                    <button name="category" type="submit" value="service" class="form-control">เข้ารับบริการแล้ว</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <form action="" method="post">
                    <button name="category" type="submit" value="" class="form-control">ทั้งหมด</button>
                    </form>
                  </div>
                </div>


                <!-- <div class="col-md-12"> -->
                <div class="table-responsive">
                  <table class="table table-bordered  table-hover text-md-center">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">รหัสการจอง</th>
                        <th scope="col">ยี่ห้อรถ</th>
                        <th scope="col">รุ่น</th>
                        <th scope="col">ป้ายรถ</th>
                        <th scope="col">จังหวัดป้ายรถ</th>
                      <th scope="col">ค่าบริการ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">จัดการ</th>
                      </tr>

                    </thead>
                    <tbody>
                      <?php
                      $i=1;
                          while ($row = mysqli_fetch_array($result)) {
                              echo "<tr>";
                              echo "<th scope='row'>$i</th>";
                              echo "<td>" . $row['b_id'] ."</td>";
                              echo "<td>" . $row['brand'] . "</td>";
                              echo "<td>" . $row['model'] . "</td>";
                              echo "<td>" . $row['carsign'] . "</td>";
                              echo "<td>" . $row['province'] . "</td>";

                              if ($row['checkin']==0 || $row['checkout']==0) {
                                echo "<td>ไม่มีค่าบริการ</td>";
                            } else {
                              $t1 = strtotime($row['checkout']);
                              $t2 = strtotime($row['checkin']);
                              $diff = $t1 - $t2;
                              $hours = $diff / (60 * 60);
                              $hours = ceil ($hours);

                              if ($hours>=0&&$hours<=5) {
                                  $price = $hours*20;
                              }
                              if ($hours>=6&&$hours<=15) {
                                  $price = $hours*40;
                              }
                              if ($hours>=16&&$hours<=23) {
                                  $price = $hours*60;
                              }
                              if ($hours>23) {
                                  $price = $hours*75;
                              }
                              if ($price==0) {
                                  $price=20;
                              }


                              echo "<td>$price บาท</td>";
                            }

                              if ($row['status']=='request') {
                                  echo "<td><p style='color:red;'>ยังไม่เข้ารับบริการ</p></td>";
                                  echo "<td><a href='editbooking.php?b_id=".$row['b_id']."'><p>แก้ไข</p></a></td>";
                              } else {
                                if ($row['checkout']==0) {
                                  echo "<td>เช็คอินแล้ว</td>";
                                }else{
                                  echo "<td>เช็คเอาต์แล้ว</td>";

                              }
                                  echo "<td><a onclick='return false'><p style='text-decoration: line-through;'>แก้ไข</p></a></td>";
                              }

                              if ($row['status']=='request') {
                                  echo "<td><a onclick=\"return confirm('ยืนยันการยกเลิก')\" href='assets/php/cancelbooking.php?b_id=".$row['b_id']."'><p style='color:red;'>ยกเลิก</p></a></td>";
                              } else {
                                  echo "<td><a onclick=\"return false\" ><p style='text-decoration: line-through;'>ยกเลิก</p></a></td>";
                              }
                              echo "</tr>";
                              $i++;
                          }
                        ?>
                    </tbody>
                  </table>
                </div>
                <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;">
                </iframe>
                <!-- </div> -->
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

  
  <!-- Clear -->
  <script>
    window.history.replaceState( null, null, window.location.href );
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