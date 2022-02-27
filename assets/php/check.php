<?php
include "conn.php";

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    $sql = "select count(*) as cntUser from user where user_username='".$username."'";

    $result = mysqli_query($conn, $sql);
    $usernamestatus = "avaible";
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
    
        if ($count > 0) {
            $usernamestatus = "notavaible";
        }
    }
    echo $usernamestatus;
    mysqli_close($conn);
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "select count(*) as cntUser from user where user_email='".$email."'";

    $result = mysqli_query($conn, $sql);
    $emailstatus = "avaible";
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
    
        if ($count > 0) {
            $emailstatus = "notavaible";
        }
    }
    echo $emailstatus;
    mysqli_close($conn);
}

?>