<?php include ('header2.php'); 

if($_GET['business_name'])
{
	$business_name=$_GET['business_name'];
}?>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:734px;
margin:0 auto;
}
</style>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<img src="revenue.jpg" width="100" height="100" style="float:left;"><strong>County Revenue Managemt System</strong><br>Nairobi, Kenya.<br>Email Us: sirlymwycliffe@gmail.com<br>Contact us </a>on <a href="#">07111456567.</a>
<br><br><br><br>
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
							$result= mysqli_query($conn,"select * from smallpayment WHERE business_name='".$business_name."'				
							order by id DESC  ") or die (mysqli_error($conn));
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
</table>

</div>
<a href="home.php">Back</a>