<?php include ('include/dbcon.php');
 ?>
<?php include ('header1.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Admin /</small> Taxpayer
                </h3>
            </div>
        </div>
        <div class="clearfix">
 
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
<?php
$user_query  = mysqli_query($conn,"select * from taxpayer")or die(mysqli_error($conn));
$user_row =mysqli_fetch_array($user_query);
$id  = $user_row['id'];
?> 
                        <ul class="nav navbar-right panel_toolbox">
						<a href="taxpayer_reg_form1.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add New Taxpayer</button>
							</a>
							
                        </ul>
                        <ul class="nav navbar-centre panel_toolbox">
						<style="background:none;"></style>
							<!-- <button class="btn btn-primary"><i class="#" href="" ></i> Make Payement</button>
							 -->
							</a>
							
                        </ul>
                        </div>
                        </div>
                        </div>
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
							<thead>
								<tr>
								<th>Business Name</th>
									<th>Business type</th>
									<th>Address</th>
									<th>Business Location</th>
									<th>Date Added</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
<?php
			   
		
	    
		$result1 = mysqli_query($conn,"SELECT * FROM taxpayer order by id ASC")or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result1))
         {
      $id=$row['id'];
		?>
							<tr>
								
								 
								<td><?php echo $row['business_name']; ?></td> 
								<td><?php echo $row['business_type']; ?></td> 
								<td><?php echo $row['address']; ?></td> 
								<td><?php echo $row['location']; ?></td> 
								<td><?php echo $row['date_added']; ?></td>
									<td>
									
									<a class="btn btn-warning" for="ViewAdmin" href="edit_taxpayer1.php<?php echo '?id='.$id; ?>">
										<i class="fa fa-edit"></i>
									</a>
									<a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>
			
									<!-- delete modal admin -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i>Admin</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													Are you sure you want to delete?
												</div>
												<div class="modal-footer">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												<a href="delete_taxpayer.php<?php echo '?id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												</div>
										</div>
										</div>
									</div>
									</div>
								</td> </tr>
							<?php } ?>
							</tbody>
							</table>
							<tbody>
							</div>
						
			</div>			
                        <!-- content ends here -->
					                   

<?php include ('footer.php'); ?>