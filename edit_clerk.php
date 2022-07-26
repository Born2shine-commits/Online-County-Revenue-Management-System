<?php include ('include/dbcon.php');
$id=$_GET['id'];
 ?>
<?php include ('header1.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Admin / Clerk Profile /</small> Edit Clerk
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit Clerk</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
<?php
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from clerk where id='$id'")or die(mysqli_error($conn));
$row=mysqli_fetch_array($query);
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                          
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">First Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" id="first-name2" required="required" readonly="readonly"class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Middle Name
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="middlename" value="<?php echo $row['middlename']; ?>" placeholder="MI / Middle Name....." id="first-name2" readonly="readonly"class="form-control col-md-7 col-xs-12">
                                    </div><span style="color:red;">Optional</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Last Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" id="last-name2" required="required" readonly="readonly"class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">User Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['username']; ?>" name="username" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Password
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" value="<?php echo $row['password']; ?>" name="password" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Confirm Password
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" value="<?php echo $row['confirm_password']; ?>" name="confirm_password" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                         <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="clerk1.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="update" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                                    </div>
                                </div>
                            </form>
							
<?php
$id =$_GET['id'];
if (isset($_POST['update'])) {
						
							
// if ($error > 0){
										
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// $admin_type = $_POST['admin_type'];


$result=mysqli_query($conn,"select * from clerk") or die (mysqli_error($conn));
$row=mysqli_num_rows($result);

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!'); window.location='admin_profile.php'</script>";
}else
{
$query=mysqli_query($conn," UPDATE clerk SET username='$username', password='$password', 
confirm_password='$confirm_password' WHERE username = '$username' ")or die(mysqli_error($conn));
if($query>0)
{
echo "<script>alert('Successfully Update Clerk Info!'); window.location='clerk1.php'</script>";	
}
else
{
	echo "<script>alert('Successfully Update Clerk Info!'); window.location='clerk1.php'</script>";
}
}


$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// $admin_type = $_POST['admin_type'];

$result=mysqli_query($conn,"select * from clerk where id='$id'") or die (mysqli_error($conn));
$row=mysqli_num_rows($result);

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!'); window.location='clerk1_profile.php'</script>";
}else

{		
$query=mysqli_query($conn," UPDATE clerk SET username='$username', password='$password', 
confirm_password='$confirm_password' WHERE username = '$username' ")or die(mysqli_error($conn));
if($query>0)
{
	echo "<script>alert('Successfully Updated Clerk Info!'); window.location='clerk1.php'</script>";
}
else
{
	echo "<script>alert('Update Clerk Info failed!'); window.location='clerk1.php'</script>";
}

}

}
?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>