<?php include("server.php"); ?>

<!doctype html>
<html>
<head><title>user registration</title>
	<link rel="stylesheet" type="text/css" href="css/stylesing.css">
</head>

<body>
<?php include("header.php"); ?>
<div class="header">
	<h2>Login</h2>
	<form method="post" action="loginfrm.php">
		<!--error messages here-->
		<?php include("errors.php"); ?>
		<div class="input-group">
			<label>username</label>
			<input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>	
		
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
			
		</div>	
		<p>
			Not yet a member? <a href="signup.php">Sign up</a>
		</p>				
	</form>
</div>
	</body>
	<?php include 'footer.php'; ?>
</html>