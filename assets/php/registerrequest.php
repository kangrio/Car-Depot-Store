<?php
include "conn.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$birthday = $_POST['birthday'];
$id_card = $_POST['id_card'];

$sql = "INSERT into user(user_username,user_password,user_firstname,user_lastname,user_adress,user_phone,user_email,user_birthday,user_gender,user_id_card)
value('$username','$password','$firstname','$lastname','$adress','$phone','$email','$birthday','$gender','$id_card')";

mysqli_query($conn, $sql);
mysqli_close($conn);

?>
<script>
alert('สมัครสมาชิกเรียบร้อย');
location.href = "../../index.php";
</script>"