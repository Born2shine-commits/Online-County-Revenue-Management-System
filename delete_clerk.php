<?php 

include('include/dbcon.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"delete from clerk where id = '$id' ")or die(mysqli_error($conn));
if($query>0)
{
	?>
	<script>
	window.alert("Deleted successfully");
	window.location="clerk1.php";
	</script>
	<?php
}
else
{
	?>
	<script>
	window.alert("Deletion failed");
	window.location="clerk1.php";
	</script>
	<?php
}

?>