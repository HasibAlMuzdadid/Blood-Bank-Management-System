<style>
td
{
	padding:10px;
}
</style>

<?php
include("displayusersconnection.php");
$query = "SELECT * FROM users1";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total !=0)
{
	?>
	
	<table>
	     <tr>
		     <th>ID</th>
		     <th>User Name</th>
			 <th>Gender</th>
			 <th>Age</th>
			 <th>Mobile No</th>
			 <th>Blood Group</th>
			 <th>Email</th>
			 <th>Password</th>
			 <th>Operations</th>
		 </tr>
	
	
	
	
	<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
	   echo "<tr>
	            <td>".$result['id']."</td>
				<td>".$result['username']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['age']."</td>
				<td>".$result['mobileno']."</td>
				<td>".$result['bloodgroup']."</td>
				<td>".$result['email']."</td>
				<td>".$result['password']."</td>
				<td><a href='deleteusers.php?id=$result[id]' onclick='return checkdelete()'> Delete</a></td>
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