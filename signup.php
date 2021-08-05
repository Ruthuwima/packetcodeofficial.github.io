<?php include("server.php")?>

<!doctype html>
<html>
<head><title> LAND REGISTRATION MANAGEMENT SYSTEM </title>
	<link rel="stylesheet" type="text/css" href="css/stylesing.css">
</head>
<body>
<?php include("header.php")?>
<div class="header">
	<h2>Register a User</h2>
	<form method="post" action="signup.php">
		<!--error messages here-->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>username</label>
			<input type="text" name="username"value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>	
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>	
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
			
		</div>	
		<p>
			Already a member? <a href="loginfrm.php">Sign in</a>
		</p>				
	</form>
</div>
	</body>
	<?php include 'footer.php'; ?>
</html>