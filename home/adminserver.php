<?php
session_start();

// initializing variables
$adminname = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');


// LOGIN USER
if (isset($_POST['password']) && isset( $_POST['adminname'])) {
  $adminname = mysqli_real_escape_string($db, $_POST['adminname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($adminname)) {
  	array_push($errors, "Admin name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM admin WHERE adminname='$adminname' AND password='$password'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
		
  	  $_SESSION['adminname'] = $adminname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: adminindex.php');
  	}else {
		
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>