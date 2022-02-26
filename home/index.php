<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM 'users1'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo $result['username']."";

	?>

<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
	<link rel="stylesheet" type="text/css" href="userhomestyle.css">
</head>
<body>

<div id="main">
   <nav> 
   
   <img src="b8.png" width="100" height="80">
   
   <ul>
      <li><a href="homeindex.html">Home</a></li>
	  <li><a href="">User Profile</a></li>
	  <li><a href="sendrequest.php">Send Request</a></li>
	  <li><a href="viewrequests.php">View Request</a></li>
	  <li><a href="search.php">Search Donor</a></li>
	  <li><a href="userupdate.php?un=$result[username]">Update Profile</a></li>
	  <li><a href="index.php?logout='1'">Log Out</a></li>
   </ul>
   </div>

<div class="header">
	<h2>Donor Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>