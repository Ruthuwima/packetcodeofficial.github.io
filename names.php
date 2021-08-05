<?php include("server.php")?>

<!doctype html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/stylesing.css">

<body>
<?php include("header.php")?>
<div class="header">
	<h1>Registration Form</h1>
<form method="post" action="names.php">
  <!--error messages here-->
  	<?php include('errors.php'); ?>
    
	<div class="input-group">
    <label>First Name</label>
	<input type="text" placeholder="First-name" name="fname" value="<?php //echo $upi; ?>">
	</div>
	<div class="input-group">
	<label>Last Name</label>
	<input type="text" placeholder="Last-name" name="lname" value="<?php //echo $province; ?>">
	</div>
	<div class="input-group">
	<label>ID Card</label>
	<input type="text" placeholder="Identity card" name="idcard" value="<?php //echo $District; ?>">
	</div>
	<div class="input-group">
	<label>Rate</label>
	<input type="text" placeholder="Rate owns" name="rate" value="<?php //echo $Sector; ?>">
	</div>
	<div class="input-group">
	<label>UPI</label>
	<input type="text" placeholder="UPI" name="upi1" value="<?php //echo $village; ?>">
	</div>
	<div class="input-group">
			<button type="submit" name="savename" class="btn">Submit</button>
		</div>	

  </div>
  
</form>
</body>
<?php include 'footer.php'; ?>
</html>