<?php
    session_start();
    unset($_SESSION['email']);
    session_destroy();

    // echo $_SESSION['email'];
    header("location:login.php");
?>