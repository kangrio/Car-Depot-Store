<?php
include "conn.php";
if (isset($_POST['submit'])) {
    session_start();
    $user_id = $_SESSION['user_id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $carsign = $_POST['carsign'];
    $province = $_POST['province'];

    $sql = "INSERT into booking(user_id,brand,model,carsign,province)
value($user_id,'$brand','$model','$carsign','$province')";

    mysqli_query($conn, $sql);

    mysqli_close($conn); ?>

<script>
alert('จองเรียบร้อย');
location.href = "../../history.php";
</script>

<?php
}
?>