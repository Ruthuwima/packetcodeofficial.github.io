<?php

    require_once('connect.php');

    @session_start();

    $email = $_SESSION['email'];

    if (!isset($email)) {
        header("location:login.php");
    }

    $username = mysqli_fetch_assoc(mysqli_query($db, "SELECT *from auth WHERE email = '$email'"));
	$username = $username['username'];
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> LAND REGISTRATION MANAGEMENT SYSTEM </title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/styling.css" rel="stylesheet" type="text/css" media="all">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

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
            <a href="index.php" class="nav-item nav-link active">Home</a>
			<a href="view.php"class="nav-item nav-link">View data</a>                    
                    <a href="admin_settings.php" class="nav-item nav-link">Settings</a>                      
            <a href="logout.php" class="nav-item nav-link"><?= $username;?> (Logout)</a>
            <!-- <div class="dropdown"> 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $username;?> <b class="caret"></b></a>
                <ul class="dropdown-menu">    
                    <li> <a href="logout.php">Log Out</a></li>
                    </ul>
            </div>             -->
            </div>
        </div>
    </div>
</nav>