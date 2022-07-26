<?php include ('header2.php'); ?>


        <div class="page-title">
		
		
            <div class="title_left">
                <h3>
					<small>Clerk Home /</small> TaxPayers Details 
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
$user_query  = mysqli_query($conn,"select * from taxpayer")or die(mysqli_error($conn));
$user_row =mysqli_fetch_array($user_query);
$id = $user_row['id'];
?>                            <li>
							<a href="taxpayer_reg_form.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add TaxPayer</button>
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
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
								
									<th>Name of Business</th>
									<th>Type of Business</th>
									<th>Address</th>
									<th>Location</th>
								    <th>Date added</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							$result= mysqli_query($conn,"select * from taxpayer order by id ASC") or die (mysqli_error($conn));
							while ($row= mysqli_fetch_array ($result) ){
							$id=$row['id'];
							?>
							<tr>
								 
								<td><?php echo $row['business_name']; ?></td>
								<td><?php echo $row['business_type']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td><?php echo $row['date_added']; ?></td>
							
								<td>
									
									<a class="btn btn-warning" for="ViewAdmin" href="edit_taxpayer.php<?php echo '?id='.$id; ?>">
										<i class="fa fa-edit"></i>
									</a>
									
			
									<!-- delete modal admin -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Clerk</h4>
										</div>
										
												
										</div>
										</div>
									</div>
									</div>
								</td> 
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