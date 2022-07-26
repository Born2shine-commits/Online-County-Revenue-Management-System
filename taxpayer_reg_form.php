<?php include ('header2.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / Taxpayer</small>
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    
                    <div class="x_content">
                        <!-- content starts here -->

                            <form method="post" action="taxpayer_reg_form.php" enctype="multipart/form-data" class="form-horizontal form-label-left">
                              
                              
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Name of the Business<span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="nameofthebusiness" placeholder="Name of the Business" id="first-name2" required="" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Type of Business <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-6">
                                        <select name="typeofbusiness" class="select2_single form-control" required="required" tabindex="-1" >
                                        <option value="" disabled selected="">select Type </option>
                                            <option value="Small">Small</option>
                                            <option value="Large">Large</option>
                                            <option value="Market">Market Permit/Fee</option>
                                            
                                        </select>
                                    </div>
                                </div>								
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Address
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="address" id="last-name2" class="form-control col-md-7 col-xs-12" placeholder="e.g. 255-20204-kericho">
                                    </div>
                                </div>
                       <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Location of Business
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="locationofbusiness" id="last-name2" class="form-control col-md-7 col-xs-12" placeholder="Location of Business">
                                    </div>
                                </div>
								
								
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Date Added
                                    </label>
                                    <div class="col-md-6">
                                        <input type='text' value="<?php echo date('d M Y '); ?>"  name="date" class="form-control col-md-7 col-xs-12" readonly="readonly">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="taxpayer_form.php"><button type="cancel" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
							
							<?php	
				include ('include/dbcon.php');
                if (isset($_POST['submit'])){
							       
                                    $business_name = $_POST['nameofthebusiness'];
									$business_type = $_POST['typeofbusiness'];
									$address = $_POST['address'];
                                    $location = $_POST['locationofbusiness'];			
                                    $date= $_POST['date'];
									
									
					
					
						$result=mysqli_query($conn,"insert into taxpayer (business_name,business_type,address,location,date_added)
						values ('$business_name','$business_type', '$address', '$location','$date')")or die(mysqli_error($conn));
						 if($result>0)
						 {
						echo "<script>alert('taxpayer successfully added!');window.location='taxpayer_form.php'</script>";
					      }
					   else
					   {
						echo"<script>alert('Taxpayer not added'); window.location='taxpayer_form.php'</script>";
					    }
									
									}
							
                            

								?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>
</body>
</html>