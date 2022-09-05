<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="team16">
<meta name="date" content="2022-07-10">
<!-- add icon -->
<link rel="icon" href="images/robot.ico">
<!-- google fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="signupnew.css" rel="stylesheet">
<!-- form validation script  -->
<script defer src="new.js"></script>
<title>register page</title>
</head>

<body>

<div id="backToList">
  <a class="back-link" href="signup.php"> Back to List</a>
</div>
  <h1>Create A New User</h1>
 
  <form action='new.php' method="post" onsubmit="return validate();">

    <div class="textfield">
          <!-- <dt>User Name</dt> -->
          <input type="text" name="username" class="form" id="username" placeholder="Username" />
          <small>Error Message</small> 
    </div>
    <div class="textfield">
          <!-- <dt>Email</dt> -->
          <input type="text" name="email"  class="form" id="email" placeholder="Email" />
          <small>Error Message</small> 
    </div>
    <div class="textfield">
          <!-- <dt>Password</dt> -->
          <input type="password" name="password" class="form" id="password" placeholder="Password" />
          <small>Error Message</small>
    </div>
    <div class="textfield">
          <!-- <dt>Confirm Your Password</dt> -->
          <input type="password" name="cfpassword"  class="form" id="cfpassword" placeholder="Re-type your password"/>
          <small>Error Message</small>
    </div>
    <div id="operations">
      <input type="submit" value="Create User" class="createUserBtn" />
    </div>
  
    </form>


<?php require_once 'create.php'; ?>
<?php include 'footerEm.php'; ?>
