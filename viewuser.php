<!DOCTYPE html>
<html lang="en">
<head><title> LAND REGISTRATION MANAGEMENT SYSTEM </title>
<?php
    require_once("user_menu.php");
?>
</head>
<body>
		<form method="POST" action="viewuser.php">
		<center><label bgcolor="white">Enter identity Card number:</label>
		<input type="text" name="searching" size="48">
		<input type="submit" value="Search" name="search"></center>
		</form>

            <table class="table main-content table-striped table-bordered" bgcolor="white">
                <thead>
                    <tr>
                        <th>UPI</th><th>FIRST NAME</th><th>LAST NAME</th><th>ID CARD</th><th>RATE</th><th >Province</th><th >District</th><th >Sector</th><th >Cell</th><th >Village</th><th >Surface</th><th >LAND USAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
						if (isset($_POST['search']))
							{
							
							$ValueToSearch = mysqli_real_escape_string($db, $_POST['searching']);
							 
						
                        $query = mysqli_query($db, "SELECT upi,fname,lname,idcard,rate,Province,District,Sector,Cell,Village,Surface,landusage FROM info WHERE idcard = '$ValueToSearch'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['upi'];?></td>
                                <td><?php echo $row['fname'];?></td>
                                <td><?php echo $row['lname'];?></td>
                                <td><?php echo $row['idcard'];?></td>
								<td><?php echo $row['rate'];?></td>
                                <td><?php echo $row['Province'];?></td>
                                <td><?php echo $row['District'];?></td>
								<td><?php echo $row['Sector'];?></td>
                                <td><?php echo $row['Cell'];?></td>
                                <td><?php echo $row['Village'];?></td>
								<td><?php echo $row['Surface'];?></td>
                                <td><?php echo $row['landusage'];?></td>
                               
                                                                                                                                                                                         
                            </tr>
                        <?php
                        $i++;
                        }
							}
						else
							{
							echo "no result";
							}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php

    require_once("footer.php")

?>

</body>

</html>
