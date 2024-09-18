
<html><head>

<title>

<?php
error_reporting(0);
include "databaseConnection.php";

session_start();

if(isset($_SESSION['info_delete'])){
unset($_SESSION['info_delete']);
}

echo$_SESSION['username']." categories";


?>
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



<div class="container">
<div class="row">
  <div class="col-xs-6">

<a href='frontitem.php' class='btn btn-primary'>click here for design to front page</a>
</div>

  <div class="col-xs-6">

<?php

$username= $_SESSION['username'];
echo("<br/><a href='logout.php?username=".$username."' class='btn btn-danger'>log out </a>");

?>
</div> </div> </div> 

<h1>
<?php
echo("welcom ". $username);


?>
</h1>


<div class="container">

<form method='POST'>

<div class="container">


  <div class='container'>
<h4>creat category </h4>

Unique Name<br/>

<input type='text' name='category' value=' '> </input><br/>
<br/>

<br/>
please use _ in place of space ...

</div>

<div>
Name for display in site
<br/> <br/> <br/> 

<input type='text' name='display' placeholder='display name' />
<br/> <br/> <br/> 

</div>

<div>
<center>
<input type='submit' name='submit' value='submit'></input>
</center>
<br/> <br/> <br/> 

</div>

</form>
</div>

<?php

include "databaseConnection.php";
error_reporting(0);


if(isset($_POST['submit'])){

$cname=mysqli_real_escape_string($conn,$_POST['category']);

$display=mysqli_real_escape_string($conn,$_POST['display']);
$table_name= $cname."_category";


if (strpos($cname, ' ') !== false) {

echo "<h1>please do not use space or write something </h1>";


$result = mysqli_query($conn,"SHOW TABLES LIKE '".$table_name."'");
if($result->num_rows == 1) {


echo"<h1> this unique name is taken </h1>";
}}

else {
$_SESSION['username']= $username;
$_SESSION['cname']= $cname;
$_SESSION['table_name']= $table_name;
$_SESSION['display']= $display;

   header("Location: category.php");

}}

?>
<h1> your categories </h1>

<?php

$wln=$username."_categories";

$sql = "SELECT * FROM $wln ";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo "<div class='container'>";

while($row = mysqli_fetch_array($result)){
$idnum= $row['id'];


echo "<div class='container'>" . $row['display_name'] . "</div>";

echo "<div class='container'>" . $row['name'] . "</div>";
echo "<div class='container'>" . $row['live'] . "</div>";


echo "<div class='container'><a href='subcategory.php?cname=".$row['name']."& username=".$username."'>Show</a> </div>";

echo "<div class='container'><a href='deleteWorklist.php?idnum=".$idnum."& username=".$username."&name=".$row['name'] ."'>delete</a> </div>";

echo "<div class='container'><a href='publicworklist.php?idnum=".$idnum."&wln=".$wln."'>click to Live</a> </div>";

echo "<div class='container'><a href='privateworklist.php?idnum=".$idnum."&wln=".$wln."'>click to Private</a> </div>";
echo "<div class='container'>" . $row['reg_date'] . "</div>";

echo"<hr/>";
}
echo "</div>";
// Free result set

mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>


</body>
</html>

