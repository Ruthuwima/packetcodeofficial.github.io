<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once("menu.php");
?>
</head>
<body>
<div class="container">
    <div class="row">
        
        <div class="col-md-8 main-space">
            <br>
            <div class="row">
                <div class="col-md-8"><h5 class="main-title">CHANGE LOGIN CREDENTIALS</h5></div>
                <div class="col-md-4"></div>                
            </div>
            <br>            
            <form method="POST">                         
                <label>Email Address</label>
                <input type='text' class='form-control' name='email' value="<?php echo $email;?>">
                <label>Old Password</label>
                <input type='password' class='form-control' name='old_password' placeholder='Old passcode'>
                <label>New Password</label>
                <input type='password' class='form-control' name='new_password' placeholder='New passcode'>        
                <label>Confirm new password</label>
                <input type='password' class='form-control' name='confirm_password' placeholder='Confirm new passcode'>                
                <br>
                <input type='submit' class='btn btn-success' name='submit' value='Change Settings'><br>
            </form>

            <?php
                if(isset($_POST['submit'])) {
                    
        
                    $email = mysqli_real_escape_string($db, $_POST['email']);
                    $old_password = mysqli_real_escape_string($db, $_POST['old_password']);
                    $new_password = mysqli_real_escape_string($db, $_POST['new_password']);
                    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
                    
                    if (empty($email) || empty($old_password) || empty($new_password) || empty($confirm_password)) {
                        ?>
                            <br>
                            <div class="alert alert-danger"><strong>Error!</strong> All fields are required!</div>
                        <?php
                    }else{
                     
                        $status = mysqli_query($db, "SELECT *from auth where password='$old_password'")or die(mysqli_error($db));
                        
                        if (mysqli_num_rows($status) > 0) {
                            
                            if($new_password == $confirm_password) {
                                
                                $update = mysqli_query($db, "UPDATE auth SET email='$email', password='$new_password' WHERE password='$old_password'")or die(mysqli_error($db));
                    
                                if ($update) {
                                    ?>
                                        <br>
                                        <div class="alert alert-success"><strong>Done!</strong> Settings saved successfully!</div>
                                    <?php
                                }else{
                                    ?>
                                        <br>
                                        <div class="alert alert-danger"><strong>Error!</strong> Could not update information!</div>
                                    <?php
                                }

                            }else {
                                ?>
                                    <br>
                                    <div class="alert alert-danger"><strong>Error!</strong> Passwords do not match!</div>
                                <?php
                            }
                    
                        } else {
                            ?>
                                <br>
                                <div class="alert alert-danger"><strong>Error!</strong> Wrong current password!</div>
                            <?php
                        }
        
                    }

                }
            ?>

        </div>
    </div>
</div>
<script>
</script>
</body>

</html>