<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>view requests</title>
	<link rel="stylesheet" type="text/css" href="viewrequests.css">
</head>
<body>
<div class="header">
  	<h2>View Blood Donation Requests</h2>
  </div>
	<div class="container">
		<div class="row">
			<div class="col-md-14 col-md-offset-.5" style="margin-top: 2%;">
				<div class="row">
				<?php 
				$connection = mysqli_connect('localhost','root','','request');
				$sql = "SELECT * FROM sendrequest";
                $result = mysqli_query($connection,$sql);
				?>
				
				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>Gender</th>
						<th>Age</th>
						<th>Mobile No</th>
						<th>Blood Group</th>
						<th>E-Mail</th>
						<th>Till Require Date</th>
						<th>Details</th>
						
					</tr>
					<?php while($row = mysqli_fetch_object($result)) { ?>
					<tr>
						<td><?php echo $row->name ?></td>
						<td><?php echo $row->gender ?></td>
						<td><?php echo $row->age ?></td>
						<td><?php echo $row->mobileno ?></td>
						<td><?php echo $row->bloodgroup ?></td>
						<td><?php echo $row->email ?></td>
						<td><?php echo $row->tillrequiredate ?></td>
						<td><?php echo $row->details ?></td>
						
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>