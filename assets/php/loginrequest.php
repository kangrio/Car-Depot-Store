<?php
  session_start();

include("conn.php");

$username=$_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM user WHERE user_username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
    $row=mysqli_fetch_array($result);
    if ($row['user_password']==$password) {
        $_SESSION['isLogin'] = true;
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_firstname'] = $row['user_firstname'];
        $_SESSION['user_lastname'] = $row['user_lastname'];
        $_SESSION['user_level'] = $row['user_level'];

        if($_SESSION['user_level']=='admin'){

            header('location:../../admin/index.php');
        }else{

            header('location:../../index.php');
        }
    } else {
        ?>
    <script>
        alert("รหัสผ่านไม่ถูกต้อง");
        location.href = "../../login.php";
    </script>
    <?php
    }
} else {
    ?>
    <script>
        alert("ชื่อผู้ใช้ไม่ถูกต้อง");
        location.href = "../../login.php";
    </script>
    <?php
}

mysqli_close($conn);

?>
