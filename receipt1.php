<?php include('include/dbcon.php');

function formatMoney($number, $fractional=false) {
                if ($fractional) {
                  $number = sprintf('%.2f', $number);
                }
                while (true) {
                  $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                  if ($replaced != $number) {
                    $number = $replaced;
                  } else {
                    break;
                  }
                }
                return $number;
              }  

?>
<!DOCTYPE html>
<html lang="en">


    <title>TicketSource</title>
	
	<head>
    <link rel="shortcut icon" href="">
		
		<link href="receipt.css" media="all" rel="stylesheet" type="text/css" />


<script>
function myFunction()
{
        var printButton = document.getElementById("printpagebutton");
        var back = document.getElementById("back");
        printButton.style.visibility = 'hidden';
        back.style.visibility = 'hidden';
        printButton.style.visibility = 'hidden';
        window.print()
}

</script>
	</head>


	<body >
		<a id="back" href="user_order.php">Back</a>
        <div id="print">
<a href="" id="printpagebutton" onclick="myFunction()"><B>Print</B></a>
		
		<h3 class="one"><img src="image/logo.jpg"  /><br/>Receipt<br/><font color="blue"><U>PAID</U></font></h3>
		<div class="printtitle">
			<hr>
<b>  The company is located at Nairobi Central Business District</b><hr></div>
		
		<table>
			<?php
			$id=$_GET['id'];
			$query=mysqli_query($conn,"select * from orders where OrderID='$id'") or die(mysqli_error($conn));
			while($row=mysqli_fetch_array($query)){
				$CID=$row['customerID'];
                $tax=$row['tax'];
			$query2=mysqli_query($conn,"select * from customers where CustomerID='$CID'") or die(mysqli_error($conn));
			$row2=mysqli_fetch_array($query2);
			?>
			<tr><td>Invoice No.: <u><?php echo $row['Transaction_code'];?></u>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td>Date: <u><?php echo date("F j, Y", strtotime( $row['orderdate']));?></u></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td>Customer Name: <u><?php echo $row2['Firstname'].' '.$row2['Lastname'];?></u></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td>Address: <u><?php echo $row2['Address'].', '.$row2['City'];?></u></tr></td>
			<tr><td>Shipping Address: <u><?php echo $row['shipping_address']; ?></u></td></tr>
			
            <tr><td></td></tr>
			<?php } ?>
		</table>
		
		<br/><br/>	
		<table border="" color="black">
			<thead>
				<th> Event Description</th>
				<th> Ticket Price</th>
				<th> Entries No</th>
				<th>Total</th>
			</thead>
			<tbody>
			<tr>
				<?php
				$id=$_GET['id'];
				$query3=mysqli_query($conn,"select * from order_details where OrderID='$id'") or die(mysqli_error($conn));
				while($row3=mysqli_fetch_array($query3)){
				$pid=$row3['ProductID'];
				$query4=mysqli_query($conn,"select * from tb_products where ProductID='$pid'") or die(mysqli_error($conn));
				$row4=mysqli_fetch_array($query4);

				echo '<tr><td><div align="center">'.$row4['name'].'</div></td>';
				echo '<td><div align="center">KSh '.formatMoney($row4['price'],2).'</div></td>';
				echo '<td><div align="center">'.$row3['Quantity'].'</div></td>';
				echo '<td><div align="center">KSh '.formatMoney($row3['Total'],2).'</div></td></tr>';
				} 
				?>
			</tr>
            <tr>
	            <td><div align="center"><strong>Payment Method</strong></div></td>
	            <td><div align="center" ><strong>Shipping Fee</strong></div></td>
	            <td><div align="center" ><strong>E-VAT 12%</strong></div></td>
            </tr>
            <tr>
	            <td align='center'>MPESA</td>
	            <td >KSh 150.00</td>
	            <td ><?php echo 'KSh '.formatMoney($tax,2); ?></td>
            </tr>
            <tr>
	            <td colspan="3" style="text-align:right;"><b>TOTAL AMOUNT:</b></td>
				<td style="text-align:center;">
					 <?php
						$id=$_GET['id'];
	          			$result5 = mysqli_query($conn,"SELECT sum(total) FROM order_details WHERE orderid='$id'") or die(mysqli_error($conn));
			          	while($row5 = mysqli_fetch_array($result5))
			            { 
			             $total=150+$row5['sum(total)'];   
			            echo 'KSh '.formatMoney($total,2);
			            }
			          ?>
	      		</td>
            </tr>

		</tbody>
		</table>
		<br>
		<br>
		<br/><br/>	
		</div>	

	</body>
</html>
