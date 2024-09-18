
<html><head>

<title>

<?php
error_reporting(0);
include "databaseConnection.php";

session_start();
$cname= $_GET['cname'];
$username= 'admin';

$wln= $cname."_category";



echo($cname." sub-category");
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

<?php

if(isset($_SESSION['info_delete'])){
echo"<div><h1>";
echo"<b>First Delete Them All than Delete ".$_SESSION['main_cat']."</b>";
echo"</h1></div>";

}

?>



<div class="container">
<div class="row">
  <div class="col-xs-6">
<?php

echo"<a href='profile.php?username=".$username."' class='btn btn-primary'>click here for categories page</a>";

?>
</div>

  <div class="col-xs-6">

<?php

echo("<br/><a href='logout.php?username=".$username."' class='btn btn-danger'>log out </a>");

?>
</div> </div> </div> 

<div class="container">

<form method='POST'>


  <div class='container'>

<h4>creat category </h4>

unique Name<br/>

<input type='text' name='category' value=' '> </input><br/>
<br/><br/>
<b> please do not use spase  </b>
</div>

  <div class='container'>
Description of Sub-category
<br/>

<textarea rows='4' name='description' placeholder='full discription' >
</textarea>

</div>

<!!!--changing display none on examples of products --!!!>
<div style='display:none ;'>
  <div class='container'>
Example of Product(1)
<br/>
<input type='text' name='ex1' placeholder='example 1' />

</div>


  <div class='container'>
Example of Product(2)
<br/>
<input type='text' name='ex2' placeholder='example 2' />

</div>
</div>

  <div class='container'>

<br/>
please use _ in place of space ...

</div>

<div>
Name for display in site
<br/> <br/> <br/> 

<input type='text' name='display' placeholder='display name ' />
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

$scname = $_POST['category'];
$subtable_name= $cname."_".$scname."_category";
$description = $_POST['description'];
$ex1 = 'no data';
$ex2 = 'no data';
$display = $_POST['display'];


if (strpos($scname, ' ') !== false) {

echo "<h1>please do not use space or write something </h1>";


$result = mysqli_query($conn,"SHOW TABLES LIKE '".$subtable_name."'");
if($result->num_rows == 1) {


echo"<h1> this unique sub-category name is taken write somthing else </h1>";
}}

else {

$_SESSION['scname']= $scname;
$_SESSION['subtable_name']= $subtable_name;
$_SESSION['cname']= $cname;
$_SESSION['description']= $description;
$_SESSION['ex1']= $ex1;
$_SESSION['ex2']= $ex2;
$_SESSION['display']= $display;

   header("Location: subcategory1.php");

}}

?>
<h1> Sub-categories </h1>

<?php


$sql = "SELECT * FROM $wln ";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
$idnum= $row['id'];

echo"<div style='border-style: solid; border-color: blue;'>";

echo"<h2>".$row['display_name']."</h2>";
echo "<pre>" . $row['description'] . "</pre>";
//echo "<pre>" . $row['example1'] . "</pre>";
//echo "<pre>" . $row['example2'] . " . . . . . . . </pre>";
// change in this file 
//creating comments of main lines
//of example 1 and 2


echo"<hr/>";

echo "<div class='container'>" . $row['name'] . "</div>";
echo "<div class='container'>" . $row['live'] . "</div>";
echo"<hr/>";


echo "<div class='container'><a href='item.php?scname=".$row['name']."& cname= ".$cname."'>Show</a> </div>";
echo "<div class='container'><a href='subdeleteWorklist.php?idnum=".$idnum."& cname=".$cname."&name=".$row['name'] ."'>delete</a> </div>";
echo "<div class='container'><a href='subpublicworklist.php?idnum=".$idnum."& cname=".$cname."'>click to Live</a> </div>";
echo "<div class='container'><a href='subprivateworklist.php?idnum=".$idnum."&cname=".$cname."'>click to Private</a> </div>";
echo"<hr/>";

echo "<div class='container'>" . $row['reg_date'] . "</div>";

echo"</div>";

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

