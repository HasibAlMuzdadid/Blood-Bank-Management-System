<?php 
  session_start(); 

  if (!isset($_SESSION['adminname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: adminlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['adminname']);
  	header("location: adminlogin.php");
  }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="adminhomestyle.css">
</head>
<body>

<div id="main">
   <nav> 
   
   <img src="b8.png" width="100" height="80">
   
   <ul>
      <li><a href="homeindex.html">Home</a></li>
	  
	  <li><a href="displayusers.php">Update Users</a></li>
	  <li><a href="displayrequests.php">Update Requests</a></li>
	  <li><a href="adminindex.php?logout='1'">Log Out</a></li>
   </ul>
   </div>

<div class="header">
	<h2>Admin Home Page</h2>
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

    <!-- logged in admin information -->
    <?php  if (isset($_SESSION['adminname'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['adminname']; ?></strong></p>
    	<p> <a href="adminindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>