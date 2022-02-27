<?php
session_start();
include "../assets/php/conn.php";


$b_id = $_REQUEST["b_id"];
$chechout = date('Y-m-d H:i:s');

$sql = "UPDATE booking set checkout = '$chechout' where b_id = $b_id";

mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<script>
alert('เรียบร้อย');
location.href = "index.php";
</script>