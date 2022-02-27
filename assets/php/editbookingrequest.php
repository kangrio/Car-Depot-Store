<?php
include "conn.php";
$b_id = $_GET['b_id'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$carsign = $_POST['carsign'];
$province = $_POST['province'];

    $sql = "UPDATE booking set brand='$brand',model='$model',carsign='$carsign',province='$province' where b_id=$b_id";

    mysqli_query($conn, $sql);

    mysqli_close($conn); ?>

<script>
alert('แก้ไขเรียบร้อย');
location.href = "../../history.php";
</script>

<?php

?>