<?php
include "conn.php";

if (isset($_GET["b_id"])) {
    $b_id = $_GET["b_id"];

    $sql = "UPDATE booking set status = 'cancel' where b_id = $b_id";

    mysqli_query($conn, $sql);
    mysqli_close($conn); 
    ?>
    
<script>
alert('ยกเลิกเรียบร้อย');
location.href = "../../history.php";
</script>
<?php
}

?>