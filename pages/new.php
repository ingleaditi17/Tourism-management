<?php
  require_once '../config/dbconnect.php';
  session_start();
  
  if (isset($_SESSION['username'])) {
    header('Location:auction.php');
  }
  if (isset($_POST['signup']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobno = $_POST['mobno'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sqlinsert = "INSERT INTO `users`(`id`, `fname`, `lname`, `mobno`, `email`, `username`, `password`) VALUES ('','$fname','$lname','$mobno','$email','$username','$password')";
   $runinsert = mysqli_query($conn,$sqlinsert);
  if($runinsert)
    {
      echo "New User Added ";
      header('Location:login.php');
    }
    else
    {
      echo "Error in Adding User"; 
    }
  }
  else
  {
    echo "error";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>newaccount</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="../css/all.css" media="all" />
</head>
<body background="../images/log.jpg">
<header>
	<div class="header_auction">
	<ul>
      <li><a href="auction.php">HOME</a></li>
      <li><a href="product.php">PRODUCT</a></li>
      <li><a href="play.php">HOW TO PLAY</a></li>
      <li><a href="FAQ.php">FAQ</a></li>
      <li><a href="record.php">VIEW RECORDS</a></li>  
      <li><a href="login.php">LOGIN</a></li>
    </ul>
    </div><!--End of header_auction-->
<br/><br/><br/><br/><br/>
<!--img src="../images/f4.jpg" height="300" width="300" align="left" border="2px" /-->
<center><h2>Create Your account and get ready to bid</h2></center>
<br/><br/>
<div class="container">
  <center><form class="form-inline" method="POST" action="">
    <div class="form-group">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
    </div><br/>
    <div class="form-group">
       <input type="text" class="form-control" id="mobno" name="mobno" placeholder="Mobile No.">
       <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div><br/>
	<div class="form-group">
       <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
       <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
    </div><br/>
    <div class="checkbox">
      <label><input type="checkbox"> I accept the Terms and Conditions and the Privacy Policy</label>
    </div><br/><br/>
    <button type="submit" class="btn btn-info btn-lg" name="signup">Signup</button>
    <!--button type="submit" class="btn btn-info btn-lg" >Facebook</button-->
  </form></center>
</div>
<h2 align="center">Follow Us On</h2>
		<center>
          <a href="https://www.facebook.com"><img  src="../images/facebook.png"  height="80" width="80" /></a>
          <a href="https://www.twitter.com"><img  src="../images/twitter.jpg"  height="80" width="80"/></a>
          <a href="https://plus.google.com"><img  src="../images/gplus.jpg"  height="80" width="80"/></a>
    </center>
</body>
</html>
