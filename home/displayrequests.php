<style>
td
{
	padding:10px;
}
</style>

<?php
include("displayrequestsconnection.php");
$query = "SELECT * FROM sendrequest";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total !=0)
{
	?>
	
	<table>
	     <tr>
		     <th>ID</th>
		     <th>Name</th>
			 <th>Gender</th>
			 <th>Age</th>
			 <th>Mobile No</th>
			 <th>Blood Group</th>
			 <th>Email</th>
			 <th>Till Require Date</th>
			 <th>Details</th>
			 <th>Operations</th>
		 </tr>
	
	
	
	
	<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
	   echo "<tr>
	            <td>".$result['id']."</td>
				<td>".$result['name']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['age']."</td>
				<td>".$result['mobileno']."</td>
				<td>".$result['bloodgroup']."</td>
				<td>".$result['email']."</td>
				<td>".$result['tillrequiredate']."</td>
				<td>".$result['details']."</td>
				<td><a href='deleterequests.php?id=$result[id]' onclick='return checkdelete()'> Delete</a></td>
			</tr>";	
	}
}
else
{
	echo "no record found";
}


?>
</table>

<script>
function checkdelete()
{
	return confirm('Are You Sure You Want To Delete This Data?');
}
</script>