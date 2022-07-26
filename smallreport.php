	<?php include ('header2.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Clerk /</small> Reports
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-file"></i> Report Lists</h2>
                        <ul class="nav navbar-right panel_toolbox">
                    <!--        <li>
							<a href="view_graph.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-bar-chart"></i> View Graph Report</button>
							</a>
							</li>
						-->
                            <li>
							<a href="report_printsmall.php" target="_blank" style="background:none;">
							<button class="btn btn-danger"><i class="fa fa-print"></i> Print</button>
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
						
						<form method="POST" action="" class="form-inline">
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="col-md-3">
                                            <input type="date" style="color:black;" value="<?php echo date('Y-m-d'); ?>" name="datefrom" class="form-control has-feedback-left" placeholder="Date From" aria-describedby="inputSuccess2Status4" required />
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="col-md-3">
                                            <input type="date" style="color:black;" value="<?php echo date('Y-m-d'); ?>" name="dateto" class="form-control has-feedback-left" placeholder="Date To" aria-describedby="inputSuccess2Status4" required />
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                        </div>
                                    </div>
                                </div>
                                
								
								
						</form>
						
						<span style="float:left;">
					<?php 
				//	$count = mysql_fetch_array(mysql_query("SELECT COUNT(*) as total FROM `report`")) or die(mysql_error());
				//	$count1 = mysql_fetch_array(mysql_query("SELECT COUNT(*) as total FROM `report` WHERE `detail_action` = 'Borrowed Book'")) or die(mysql_error());
				//	$count2 = mysql_fetch_array(mysql_query("SELECT COUNT(*) as total FROM `report` WHERE `detail_action` = 'Returned Book'")) or die(mysql_error());
					?>
				<!---			<a href="report.php"><button class="btn btn-primary"><i class="fa fa-info"></i> All Reports <?php // echo $count['total']; ?></button></a>
							<a href="borrowed_report.php"><button class="btn btn-success btn-outline"><i class="fa fa-info"></i> Borrowed Reports (<?php //echo $count1['total']; ?>)</button></a>
							<a href="returned_report.php"><button class="btn btn-danger btn-outline"><i class="fa fa-info"></i> Returned Reports (<?php //echo $count2['total']; ?>)</button></a>
				-->
				</span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									
									<th>Business Name</th>
									<th>Business Type</th>
									<th>Address</th>
									<th>Amount Paid</th>
									<th>Status</th>
									<th>Date Transaction</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							$result= mysqli_query($conn,"select * from smallpayment 				
							order by id DESC ") or die (mysqli_error($conn));
							while ($row= mysqli_fetch_array ($result) ){
							
							
							?>
							<tr>
								<td><?php echo $row['business_name']; ?></td>
								<td><?php echo $row['business_type']; ?></td>
								<td><?php echo $row['address']; ?></td>							   
                                <td><?php echo $row['amount']; ?></td>
								<td><?php echo $row['receiptNo']; ?></td>								
								<td><?php echo date("M d, Y h:m:s a",strtotime($row['date'])); ?></td>
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