<?php

    require_once('connect.php');

    @session_start();

    $email = $_SESSION['email'];

    if (!isset($email)) {
        header("location:login.php");
    }

  //  $user = mysqli_query($db, "SELECT tenants.*, auth.username, auth.email from auth, tenants WHERE auth.email = '$email' and auth.user_id = tenants.user_id") or die(mysqli_error($db));

   
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> LAND REGISTRATION MANAGEMENT SYSTEM </title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/sub_style.css" rel="stylesheet" type="text/css" media="all">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

<nav class="navbar navbar-expand-md">
    <div class="container">
        <a href="#" class="navbar-brand"> LAND REGISTRATION MANAGEMENT SYSTEM </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
            </div>
            <div class="navbar-nav ml-auto">
            	<a href="index.php" class="nav-item nav-link active">HOME</a>
                <a href="apply.php" class="nav-item nav-link">Register</a>
                <a href="user_settings.php" class="nav-item nav-link">Settings</a>                
            	<a href="logout.php" class="nav-item nav-link"><?= $username;?>(Logout)</a>                
            </div>
        </div>
    </div>
</nav>