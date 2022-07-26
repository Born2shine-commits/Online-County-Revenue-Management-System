<?php include ('header1.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Admin / Clerk Profile</small> / View Individual
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-info"></i> Individual Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="clerk1.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
							</a>
							</li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                       
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
								<th>First Name</th>
									<th>Middle Name</th>
									<th>Last Name</th>
									<th>Username</th>
									<th>Password</th>
									<th>Date Added</th>
								</tr>
							</thead>
							<tbody>
<?php
			   
		if (isset($_GET['id']))
		$id=$_GET['id'];
		$result1 = mysqli_query($conn,"SELECT * FROM clerk WHERE id='$id'") or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result1)){
		?>
							<tr>
								 
								<td><?php echo $row['firstname']; ?></td> 
								<td><?php echo $row['middlename']; ?></td> 
								<td><?php echo $row['lastname']; ?></td> 
								<td><?php echo $row['username']; ?></td> 
								<td><?php echo $row['password']; ?></td> 
							<td><?php echo date("M d, Y "); ?></td> 
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