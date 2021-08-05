<?php include("server.php")?>

<!doctype html>
<html>
<head><title> LAND REGISTRATION MANAGEMENT SYSTEM </title>
	<link rel="stylesheet" type="text/css" href="css/stylesing.css">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/stylesing.css">

<body >
<?php include("user_menu.php")?>
<div class="header">
	<h1>Registration Form</h1>
<form method="post" action="viewuser.php">
  <!--error messages here-->
  	<?php include('errors.php'); ?>
    
	<div class="input-group">
    <label>UPI</label>
	<input type="text" placeholder="Enter UPI" name="Upi" value="<?php //echo $upi; ?>">
	</div>
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
	<label>Land Province</label>
	<input type="text" placeholder="Land Province" name="province" value="<?php //echo $province; ?>">
	</div>
	<div class="input-group">
	<label>Land District</label>
	<input type="text" placeholder="Land District" name="district" value="<?php //echo $District; ?>">
	</div>
	<div class="input-group">
	<label>Land Sector</label>
	<input type="text" placeholder="Land sector" name="sector" value="<?php //echo $Sector; ?>">
	</div>
	<div class="input-group">
	<label>Land Village</label>
	<input type="text" placeholder="land village" name="village" value="<?php //echo $village; ?>">
	</div>
	<div class="input-group">
	<label>Land Cell</label>
	<input type="text" placeholder="land cell" name="cell" value="<?php //echo $cell; ?>">
	</div>
	<div class="input-group">
	<label>Land Surface(Area)</label>
	<input type="text" placeholder="Enter surface" name="surface" value="<?php //echo $surface; ?>">
	</div>
	<div class="input-group">
	<label>Start Date</label>
	<input type="date" placeholder="start date" name="Datestart" value="<?php //echo $datestart; ?>">
	</div>
	<div class="input-group">
	<label> End date</label>
	<input type="date" placeholder="End date " name="dateend" value="<?php //echo $dataend; ?>">
	</div>
	<div class="input-group">
	<label>Land Usage</label>
	<input type="text" placeholder="land usage" name="usage" value="<?php //echo $usage; ?>">
	</div>
	<div class="input-group">
		<button type="submit" name="savedata" class="btn">Submit</button>
	</div>	

  </div>
  
</form>

<script>
var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
 
  fixStepIndicator(n)
}

function nextPrev(n) {

  var x = document.getElementsByClassName("tab");
  
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.write(" your data  is submitted succesful");
	return false;
	
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
 
  x[n].className += " active";
}
</script>

</body>
<?php include 'footer.php'; ?>
</html>