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
                        <ul class="nav navbar-right panel_toolbox">
<?php
$user_query  = mysqli_query($conn,"select * from taxpayer where id = '$id'")or die(mysqli_error($conn));
$user_row =mysqli_fetch_array($user_query);
$id  = $user_row['id'];
?>                           
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                       
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						
							<tbody>
							
							<thead>
								<tr>
								<th>Business Name</th>
									<th>Business type</th>
									<th>Address</th>
									<th>Business Location</th>
							        <th>Make Payment</th>
								</tr>
							</thead>
							<tbody>
<?php
			   
		
		
		$result1 = mysqli_query($conn,"SELECT * FROM taxpayer where business_type like 'm%'" )or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result1)){
			 $id = $row['id'];
		?>
							<tr>
								
								 
								<td><?php echo $row['business_name']; ?></td> 
								<td><?php echo $row['business_type']; ?></td> 
								<td><?php echo $row['address']; ?></td> 
								<td><?php echo $row['location']; ?></td> 
								<td><a class="btn btn-warning" for="ViewAdmin" href="PaymentMarket1.php<?php echo '?id='.$id; ?>">
										<i class="fa fa-edit"></i>
									</a></td>
							<?php } ?>
							</tbody>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>