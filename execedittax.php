<?php
<?php include ('include/dbcon.php');
if (isset($_POST['update'])) 
   {
$business_name = $_POST['business_name'];
$business_type = $_POST['business_type'];
$address = $_POST['address'];
$location = $_POST['business_location'];

		
$query=mysqli_query($conn," UPDATE taxpayer SET business_name='$business_name', business_type='$business_type', address='$address', location='$location' WHERE username = '$username' ")or die(mysqli_error($conn));
if($query>0)
{
	echo "<script>alert('Successfully Updated Taxpayer Info!'); window.location='taxpayer_form.php'</script>";
}
else
{
	echo "<script>alert('Updated Taxpayer Info failed!'); window.location='taxpayer_form.php'</script>";
}

}

// }
// }

?>