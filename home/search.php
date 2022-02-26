<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>search blood</title>
	<link rel="stylesheet" type="text/css" href="searchstyle.css">
</head>
<body>
<div class="header">
  	<h2>Search Blood Donor</h2>
  </div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 0%;">
				<div class="row">
				<?php 
				$connection = mysqli_connect('localhost','root','','registration');
				if(isset($_POST['search'])) {
					$searchkey = $_POST['search'];
					$sql = "SELECT * FROM users1 WHERE bloodgroup LIKE '%$searchkey%'";
				}else{
				$sql = "SELECT * FROM users1";
				$searchkey = "";
				}
				
                $result = mysqli_query($connection,$sql);
				?>
				
				<form action="" method="POST"> 
					<div class="col-md-12">
						<input type="text" name="search" class='form-control' placeholder="Search By Blood Group" value="<?php echo $searchkey; ?>" > 
					</div>
					<div class="col-md-7 text-right">
						<button class="btn">Search</button>
					</div>
				</form>
				
				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Donor Name</th>
						<th>Gender</th>
						<th>Age</th>
						<th>Mobile No</th>
						<th>Blood Group</th>
						
						
						
					</tr>
					<?php while($row = mysqli_fetch_object($result)) { ?>
					<tr>
						<td><?php echo $row->username ?></td>
						<td><?php echo $row->gender ?></td>
						<td><?php echo $row->age ?></td>
						<td><?php echo $row->mobileno ?></td>
						<td><?php echo $row->bloodgroup ?></td>
						
						
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>