               <?php   
			   
                         include('include/dbcon.php');
						 if(isset($_POST['save']))
						 {
                                    $business_name = $_POST['business_name'];
                                    $business_type = $_POST['business_type'];									
                                    $address = $_POST['address'];
                                    $location = $_POST['blocation'];									
									 $amount=$_POST['amount'];
                                    $receiptNo=$_POST['receiptNo'];
                                    $date=$_POST['date'];
									
                      
                     $query=mysqli_query($conn,"insert into marketpayment (business_name,business_type,address,location,amount,receiptNo,date)
                        values ('$business_name','$business_type', '$address','$location','$amount','$receiptNo','$date')")or die(mysqli_error($conn));
						
						if($query>0)
						{
							echo "<script>alert('payments made');window.location='market.php'</script>";
						}
						else{
							echo "<script>alert('payments failed');window.location='market.php'</script>";
						}
                        
                    
                    
					   }						 
?>