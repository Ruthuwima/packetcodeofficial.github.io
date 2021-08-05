<html>
    <head>
        <title> LAND REGISTRATION MANAGEMENT SYSTEM </title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/styling.css" rel="stylesheet" type="text/css" media="all">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">        
    </head>
    <body>

    <?php
	    require_once("header.php");
    ?>    
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><br><br>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h5>LOGIN HERE</h5></div>
                        <div class="login-card panel-body">
                            <form method="POST">
                                <label>Enter Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email address">
                                <label>Enter Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password here">
                                <br>
                                <input class="btn btn-primary" name="submit" type="submit" value="Login">
                            </form>
                        </div>
                    </div>
                    <?php
                        require_once('connect.php');

                        session_start();
            
                        if (isset($_POST['submit'])) {
            
                            $email = mysqli_real_escape_string($db, $_POST['email']);
                            $password = mysqli_real_escape_string($db, $_POST['password']);
                
                            $query = mysqli_query($db, "SELECT *FROM auth WHERE password = '$password' AND email = '$email'") or die(mysqli_error($con));
                            $role = mysqli_fetch_assoc($query);
							$role = $role['role'];

                            $results = mysqli_num_rows($query);
                
                            if ($results > 0) {

                                $_SESSION['email'] = $email;

                                if($role == 'admin') {
                                    header("location:view.php");

                                }else {

                                    header("location:viewuser.php");
                                }
                            
                            }else {
                                ?>
                                <br>
                                <div class="alert-danger">
                                    <Strong>Error!</Strong> Incorrect username or password!
                                </div>
                                <?php
                            }
                        }
                   ?>

                </div>
                <div class="col-md-4"></div>                                
            </div>
        </div>
    </body>
</html>