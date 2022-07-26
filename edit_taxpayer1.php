<?php include ('include/dbcon.php');
$id=$_GET['id'];
 ?>
<?php include ('header1.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Admin / Taxpayer /</small> Edit Taxpayer
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit Taxpayer</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
<?php
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from taxpayer where id='$id'")or die(mysqli_error($conn));
$row=mysqli_fetch_array($query);
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                       <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Business Name
									</label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['business_name']; ?>" name="business_name" id="business_name" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Business Type
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="business_type" value="<?php echo $row['business_type']; ?>" readonly="readonly" placeholder="MI / Middle Name....." id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Address
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['address']; ?>" name="address" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Business Location
                                    </label>
                                    <div class="col-md-3">
                                        <input type='text' value="<?php echo $row['location']; ?>"  name="business_location" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                              <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="taxpayer_form1.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="update" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                                    </div>
                                </div>
                            </form>
							
<?php
$id =$_GET['id'];
if (isset($_POST['update'])) 
   {
$business_name = $_POST['business_name'];
$business_type = $_POST['business_type'];
$address = $_POST['address'];
$location = $_POST['business_location'];

		
$query=mysqli_query($conn," UPDATE taxpayer SET business_name='$business_name', business_type='$business_type', address='$address', location='$location' WHERE business_name = '$business_name' ")or die(mysqli_error($conn));
if($query>0)
{
	echo "<script>alert('Successfully Updated Taxpayer Info!'); window.location='taxpayer_form1.php'</script>";
}
else
{
	echo "<script>alert('Updated Taxpayer Info failed!'); window.location='taxpayer_form1.php'</script>";
}

}

// }
// }

?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>