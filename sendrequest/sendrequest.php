<?php include('sendrequestserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Send Blood Request</title>
  <link rel="stylesheet" type="text/css" href="sendrequeststyle.css">
</head>
<body>
  <div class="header">
  	<h2>Send Request</h2>
  </div>
	
  <form method="post" action="sendrequest.php">
  	<?php include('sendrequesterrors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
	<div class="input-group">
  	  <label>Gender</label>
  	  <input type="gender" name="gender" value="<?php echo $gender; ?>">
  	</div>
	<div class="input-group">
  	  <label>Age</label>
  	  <input type="age" name="age" value="<?php echo $age; ?>">
  	</div>
	<div class="input-group">
  	  <label>Mobile No</label>
  	  <input type="mobileno" name="mobileno" value="<?php echo $mobileno; ?>">
  	</div>
	<div class="input-group">
  	  <label>Blood Group</label>
  	  <input type="bloodgroup" name="bloodgroup" value="<?php echo $bloodgroup; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Till Require Date</label>
  	  <input type="tillrequiredate" name="tillrequiredate" value="<?php echo $tillrequiredate; ?>">
  	</div>
	<div class="input-group">
  	  <label>Details</label>
  	  <input type="details" name="details" value="<?php echo $details; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit</button>
  	</div>
  	
  </form>
</body>
</html>