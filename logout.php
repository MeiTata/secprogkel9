<?php

if (isset($_POST['logout'])) {

    session_start();
    $_SESSION['is_login'] = false;
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
