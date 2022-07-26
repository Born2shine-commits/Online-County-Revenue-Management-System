<?php include ('include/dbcon.php');
$id=$_GET['id'];
 ?>
<?php include ('header2.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
                    <small>Home /</small> Payments
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
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from taxpayer where id='$id'")or die(mysqli_error($conn));
$row=mysqli_fetch_array($query);
  ?>

                            <form method="post" action="savepayment1.php" class="form-horizontal form-label-left">
                       <div class="form-group">
                                    <label class="control-label col-md-4" >Business Name
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['business_name']; ?>" readonly="readonly"  name="business_name"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" >Business Type
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="business_type" value="<?php echo $row['business_type']; ?>"readonly="readonly"  placeholder="MI / Middle Name....." class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Address
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['address']; ?>" readonly="readonly" name="address" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Business Location
                                    </label>
                                    <div class="col-md-3">
                                        <input type='text' value="<?php echo $row['location']; ?>"  readonly="readonly" name="blocation" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>                                                              
                                   <div class="form-group">
                                    <label class="control-label col-md-4">Amount
                                    </label>
                                    <div class="col-md-3">
                                        <input type='text' value="1000" name="amount" readonly="readonly" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Bank Slip Number
                                    </label>
                                    <div class="col-md-3">
                                        <input type='text'  required="required" name="receiptNo"  class="form-control col-md-7 col-xs-12">
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
                                        <a href="large_business.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="save" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> SAVE</button>
<!-- 										<a href="largeprint.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Print</button></a>
 -->                                    </div>
                                </div>
                            </form>
            

                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>