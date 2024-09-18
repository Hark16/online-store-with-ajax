
<html><head>

<title>

<?php
error_reporting(0);
include "databaseConnection.php";

session_start();

if(isset($_SESSION['login'])){

$wln= "front_category";

echo"front page items ";
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

<a href='profile.php' class='btn btn-primary'>click here for categories page</a>
</div>

  <div class="col-xs-6">

<?php

$username='admin';
echo("<br/><a href='logout.php?username=".$username."' class='btn btn-danger'>log out </a>");

?>
</div> </div> </div> 

<div style='display:none ;'>

<form method="POST" enctype="multipart/form-data">

<div class="container">

Name of Item</div>
<div class="container">

<input type='text' name='itemname' placeholder='eg. iPhone 11max'/>
</div>


<div class="container">

Full Description(your full post about item) of Item</div>
<div class="container">

<textarea rows='4' name='itemdescription' placeholder='discription of product'>
</textarea>

</div>

<div class="container">

Full Features of Item</div>
<div class="container">

<textarea rows='4' name='itemfeatures' placeholder='write all features of your item '>
</textarea>

</div>

<div class="container">

affiliat Link of Item</div>
<div class="container">

<input type='text' name='itemlink' placeholder='affileate link' />
</div>

<div class="container">

Rating of Item</div>
<div class="container">

<input type='text' name='itemrating' placeholder='rating of product' />
</div>

<div class="container">

first Image of Item</div>
<div class="container">

<input type="text" name="image1">
</div>

<div class="container">

second Image of Item</div>
<div class="container">

<input type="text" name="image2">
</div>

<div class="container">

third Image of Item</div>
<div class="container">

<input type="text" name="image3">
</div>

<div class="container">

forth Image of Item</div>
<div class="container">

<input type="text" name="image4">
</div>
<div class="container">

front note for this product<br/><br/>
<textarea rows='2' name='front' placeholder='front note '>
</textarea>

</div>



<div class="container">
<center>
<input type='submit' name='submit' value='submit' />
</center>
</div>

</form>

</div>

<?php

include "databaseConnection.php";
error_reporting(0);


if(isset($_POST['submit'])){

$name = $_POST['itemname'];


$description = $_POST['itemdescription'];
$features = $_POST['itemfeatures'];
$link = $_POST['itemlink'];
$rating = $_POST['itemrating'];
$front = $_POST['front'];
$image1 = $_POST['image1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];
$image4 = $_POST['image4'];

$_SESSION['wln']= $wln;
$_SESSION['name']= $name;


$_SESSION['description']= $description;
$_SESSION['features']= $features;
$_SESSION['link']= $link;
$_SESSION['rating']= $rating;
$_SESSION['image1']= $image1;
$_SESSION['image2']= $image2;
$_SESSION['image3']= $image3;
$_SESSION['image4']= $image4;
$_SESSION['front']= $front;


   header("Location: frontitemdata.php");

}

?>
<h1> your sub-categories </h1>

<?php


$sql = "SELECT * FROM $wln ";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo "<div class='container'>";

while($row = mysqli_fetch_array($result)){
$idnum= $row['id'];



echo "<div class='container'>" . $row['name'] . "</div>";
echo "<div class='container'>" . $row['live'] . "</div>";
//echo "<div class='container'>" . $row['rating'] . "</div>";
echo "<div class='container'>" . $row['link'] . "</div>";
echo "<div class='container'>" . $row['link_text'] . "</div>";

echo "<div class='container'><div class='row'> <div class='col-xs-3'><img class='img-responsive img-thumbnail' src='".$row['image1']."' style='hight: 100px; width: 150px;'> </div> <div style='display:none;'> <div class='col-xs-3'><img class='img-responsive img-thumbnail' src='".$row['image2']."' style='hight: 100px; width: 150px;'></div><div class='col-xs-3'><img class='img-responsive img-thumbnail' src='".$row['image3']."' style='hight: 100px; width: 150px;'></div><div class='col-xs-3'><img class='img-responsive img-thumbnail' src='".$row['image4']."' style='hight: 100px; width: 150px;'></div> </div> </div></div>";
//three images becom display none



echo"<div> <a href='fid.php?idnum=".$idnum."&wln=".$wln."'>delete </a> </div>";

echo "<div class='container'><a href='fpub.php?idnum=".$idnum."&wln=".$wln."'>click to Live</a> </div>";

echo "<div class='container'><a href='fpri.php?idnum=".$idnum."&wln=".$wln."'>click to block</a> </div>";
echo "<div class='container'><a href='update.php?idnum=".$idnum."&wln=".$wln."&front=front'>click to update(rating&affiliate_Link&Images)</a> </div>";


echo "<pre>" . $row['front_note'] . "</pre>";

//echo "<pre>" . $row['description'] . "</pre>";
//echo "<pre>" . $row['features'] . "</pre>";


echo "<div class='container'>" . $row['reg_date'] . "</div>";

echo"<hr/>";

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

<?php


}
else{
echo"error </title> </head> <body> <h1> login first </h1> </body> </html>";

echo"<a href='login.php'> click here to login page </a>";
}

?>
