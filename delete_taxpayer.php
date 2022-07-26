<?php 
session_start();
include('include/dbcon.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"delete from taxpayer where id = '$id' ")or die(mysqli_error($conn));
if($query>0)
{
	?>
	<script>
	window.alert("Deleted successfully");
	window.location="taxpayer_form1.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	window.alert("Deletion failed");
	window.location="taxpayer_form1.php";
	</script>
	<?php
}


?>