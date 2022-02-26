<?php
session_start();

// initializing variables
$name = "";
$gender    = "";
$age   = "";
$mobileno    = "";
$bloodgroup = "";
$email    = "";
$tillrequiredate    = "";
$details    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'request');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
  $bloodgroup = mysqli_real_escape_string($db, $_POST['bloodgroup']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $tillrequiredate = mysqli_real_escape_string($db, $_POST['tillrequiredate']);
  $details = mysqli_real_escape_string($db, $_POST['details']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }
  if (empty($mobileno)) { array_push($errors, "Mobile no is required"); }
  if (empty($bloodgroup)) { array_push($errors, "Blood Group is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($tillrequiredate)) { array_push($errors, "Till Require Date is required"); }
  if (empty($details)) { array_push($errors, "Details is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM sendrequest WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO sendrequest (name,gender,age,mobileno,bloodgroup,email,tillrequiredate,details) 
  			  VALUES('$name','$gender','$age','$mobileno','$bloodgroup', '$email', '$tillrequiredate','$details')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "Your  Request  Is  Recorded";
  	header('location: sendrequestindex.php');
  }
}

?>