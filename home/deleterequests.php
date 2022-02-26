<?php
include("displayrequestsconnection.php");
$id = $_GET['id'];
$query = " DELETE FROM sendrequest WHERE id='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
    ?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/home/displayrequests.php">
	<?php
}
else
{
	echo "<font color='red'>Delete Process Failed";
}
?>