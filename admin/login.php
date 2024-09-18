
<!DOCTYPE html>
<html>
<head><title>

Login Page 
</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>

<h1>Welcom Admin </h1>
<div class="container">

<p> Fill this details to login your account...</p>
</div>

<div class="container">

<form method='POST'>

<div class="container">
<div class="row">
  <div class="col-xs-6">
email id : </div>

  <div class="col-xs-6">

<input type='text' placeholder='email' name='email' required/><br/>
</div>
</div>
<div class="row">
  <div class="col-xs-6">
Unique user Id : </div>

  <div class="col-xs-6">

<input type='password' name='unique' required/><br/>
</div></div>


<div class="row">
  <div class="col-xs-6">
Username  : </div>

  <div class="col-xs-6">

<input type='text' placeholder='username' name='username' required/><br/>
</div>
</div>
<div class="row">
  <div class="col-xs-6">
Password : </div>

  <div class="col-xs-6">

<input type='password' name='password' required/><br/>
</div></div>
<div class="row">
  <div class="col-xs-12">
<center>

<input type='submit' name='submit' value='submit' class='btn btn-success'/>
</center>
</div></div>
</div>

</form>
</div>

<div class="container">


<?php

session_start();
if (isset($_POST['submit']))
{

include "databaseConnection.php";

error_reporting(0);

$password = $_POST['password'];
$username = $_POST['username'];
$email = $_POST['email'];
$unique = $_POST['unique'];



$sql= "SELECT * FROM admin WHERE username='$username' and password='$password' and email = '$email' and unique_id = '$unique'";

$result = mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
 
if ($total===1){

$_SESSION['username']= $row['username'];


$pub= "UPDATE admin SET login='login' WHERE username= '$username' ";

mysqli_query($conn, $pub);
$_SESSION['login']='login';
   header("Location: profile.php");

}
else
{
?>
<script>alert("login unsuccessfull, try again")
</script>
<?php

}

}
?>

</body>
</html>
