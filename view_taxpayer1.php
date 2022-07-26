<?php include ('header1.php'); ?>

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
                    <div class="x_title">
                        <h2><i class="fa fa-info"></i> Taxpayer Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="taxpayer form1.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
							</a>
							</li>
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

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								
							<thead>
								<tr>
							
									<th>Business_Name</th>
									<th>Business_Type</th>
									<th>Address</th>
									<th>Business_Location</th>
									<th>Date Added</th>
									
								</tr>
							</thead>
							<tbody>
<?php
			   
		if (isset($_GET['id']))
		$id=$_GET['id'];
		$result1 = mysqli_query($conn,"SELECT * FROM taxpayer WHERE id='$id'") or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result1)){
		?>
							<tr>
						
								<td><?php echo $row['business_name'] ; ?></td> 
								<td><?php echo $row['business_type']; ?></td> 
								<td><?php echo $row['address']; ?></td> 
								<td><?php echo $row['location']; ?></td> 
								<td><?php echo date("M d, Y h:m:s a", strtotime($row['date_added'])); ?></td>
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>