<?php include ('include/dbcon.php');

 ?>
<?php include ('header1.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Admin /</small> Payments
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Make Payments</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
<?php
  $query=mysqli_query($conn,"select * from taxpayer where id='$id'")or die(mysqli_error($conn));
$row=mysqli_fetch_array($query);
  ?>

                            <form method="post" action="savepayments.php" class="form-horizontal form-label-left">
                       <div class="form-group">
                                    <label class="control-label col-md-4" >Business Name
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['business_name']; ?>" name="business_name"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" >Business Type
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="business_type" value="<?php echo $row['business_type']; ?>" placeholder="MI / Middle Name....." class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Address
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['address']; ?>" name="address" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Business Location
                                    </label>
                                    <div class="col-md-3">
                                        <input type='text' value="<?php echo $row['location']; ?>"  name="blocation" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                              <div class="form-group">
                                    <label class="control-label col-md-4" >Avenue
                                    </label>
                                   <div class="col-md-3">
                                        <select name="avenue" class="select2_single form-control" required="required" tabindex="-1" >
                                        <option value="" disabled selected="">select type</option>
                                            <option value="Small">Small</option>
                                            <<option value="Large">Large</option>
                                            <option value="Market">Market</option>
                                            </select>
                                        </div>
                                 </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Bank Slip Number
                                    </label>
                                    <div class="col-md-3">
                                        <input type='text'  name="receiptNo"  class="form-control col-md-7 col-xs-12">
                                    </div>

                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Date
                                    </label>
                                    <div class="col-md-3">
                                        <input type='text' value="<?php echo date('d M Y'); ?>"  name="date" class="form-control col-md-7 col-xs-12" readonly="readonly">
                                    </div>
                                    
                                </div>
                              <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="taxpayer_form1.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="save" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> SAVE</button>
                                    </div>
                                </div>
                            </form>
            

                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>