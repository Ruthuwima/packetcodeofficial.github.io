 <?php
 session_start();
 $username="";
 $email="";
 $errors=array();
//connection database
$db=mysqli_connect('localhost','root','','land reg');
if(isset($_POST['register'])){
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
	//ensure that form field are filled 
	if(empty($username)){
		array_push($errors,"username is required");
	}
	if(empty($email)){
		array_push($errors,"email is required");
	}
	if(empty($password_1)){
		array_push($errors,"password is required");
	}
	if($password_1 != $password_2){
		array_push($errors,"the two password do not match");
	}
	if (count($errors)==0) {
		$password=md5($password_1); //secure password before storing
		$sql="INSERT into auth(username, email, password) VALUES ('$username','$email','$password') ";
	 $qry=mysqli_query($db, $sql);

 if(!$qry){
	die(mysqli_error($db));
}
$_SESSION['username']= $username;
$_SESSION['success']="you are now logged in";
header('location: apply.php'); //to home page

	}

}

//log in 
if(isset($_POST['login'])){
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
	 //ensure that form field are filled 
	 if(empty($username)){
		array_push($errors,"Username is required");
	 }
	 if(empty($password)){
		array_push($errors,"Password is required");
     }
     if(count($errors)==0){
    	$password=md5($password);
    	$query="SELECT * FROM auth WHERE username='$username' AND password='$password'";
    	$result=mysqli_query($db,$query);
    	if (mysqli_num_rows($result)==1){  
    		// log user in
    		$_SESSION['username']= $username;
            $_SESSION['success']="you are now logged in";
            header('location:apply.php'); //to home page
    	}else{
    		array_push($errors,"wrong username/password combination");
    		header('location:loginfrm.php');
    	}
     }

}
//logout 
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: index.php');
}

//filling registration

if(isset($_POST['savedata'])){
	$upi=mysqli_real_escape_string($db,$_POST['Upi']);
	$fname=mysqli_real_escape_string($db,$_POST['fname']);
	$lname=mysqli_real_escape_string($db,$_POST['lname']);
	$idcard=mysqli_real_escape_string($db,$_POST['idcard']);
	$rate=mysqli_real_escape_string($db,$_POST['rate']);
	$province=mysqli_real_escape_string($db,$_POST['province']);
	$District=mysqli_real_escape_string($db,$_POST['district']);
	$Sector=mysqli_real_escape_string($db,$_POST['sector']);
	$village=mysqli_real_escape_string($db,$_POST['village']);
	$cell=mysqli_real_escape_string($db,$_POST['cell']);
	$surface=mysqli_real_escape_string($db,$_POST['surface']);
	$datestart=mysqli_real_escape_string($db,$_POST['Datestart']);
	$dataend=mysqli_real_escape_string($db,$_POST['dateend']);
	$usage=mysqli_real_escape_string($db,$_POST['usage']);
	
	if(empty($upi)){
		array_push($errors,"UPI is required");
	}
	if(empty($fname)){
		array_push($errors,"First Name is required");
	}
	if(empty($lname)){
		array_push($errors,"Last Name is required");
	}
	if(empty($idcard)){
		array_push($errors,"Identity Card is required");
	}
	if(empty($rate)){
		array_push($errors,"Rate is required");
	}
	if(empty($province)){
		array_push($errors,"PROVINCE is required");
	}
	if(empty($District)){
		array_push($errors,"DISTRICT is required");
	}
	if(empty($Sector)){
		array_push($errors,"SECTOR is required");
	}
	if(empty($village)){
		array_push($errors,"VILLAGE is required");
	}
	if(empty($cell)){
		array_push($errors,"CELL is required");
	}
	if(empty($surface)){
		array_push($errors,"SURFACE is required");
	}
	if(empty($datestart)){
		array_push($errors,"START DATE is required");
	}
	if(empty($dataend)){
		array_push($errors,"END DATE is required");
	}
	if(empty($usage)){
		array_push($errors,"LAND USAGE is required");
	}
	if (count($errors)==0) {
	$sql="INSERT into info(`upi`,`fname`,`lname`,`idcard`,`rate`,`Province`,`District`,`Sector`,`Village`,`Cell`,`Surface`,`startdate`,`enddate`,`landusage`) VALUES ('$upi','$fname','$lname','$idcard','$rate','$province','$District','$Sector','$village','$cell','$surface','$datestart','$dataend','$usage') ";
	 $qry=mysqli_query($db, $sql);

    if(!$qry){
	    die(mysqli_error($db));
    }else{
	    echo "<script> alert('data saved Successfully') </script>";
	    header('location: viewuser.php');
         }
    }
}

//filling registration names



?>
 