<?php
if (!@$_SESSION['isLogin']) {
    ?>
    <script>
        location.href = "login.php";
    </script>
    <?php
}
?>