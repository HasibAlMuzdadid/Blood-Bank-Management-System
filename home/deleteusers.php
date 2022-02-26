<?php
include("displayusersconnection.php");
$id = $_GET['id'];
$query = " DELETE FROM users1 WHERE id='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
    ?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/home/displayusers.php">
	<?php
}
else
{
	echo "<font color='red'>Delete Process Failed";
}
?>