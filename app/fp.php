
<div class='container'>
<div class='row'> 

<div class='col-xs-6'>

<?php

$idnum= $_GET['idnum'];

echo"<a class='btn btn-warning' href='index.php'>back </a><br/><br/>";

?>
</div>
<div class='col-xs-6'>

<h1> your product  </h1>

</div> </div> </div>

<?php


$wln= "front_category";

include "databaseConnection.php";

$sql = "SELECT * FROM $wln WHERE id='$idnum'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo "<div class='container'>";

while($row = mysqli_fetch_array($result)){
echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-10'>

";

echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image1']."' >";

echo"
</div>
<div class='col-xs-2'>
</div></div>
<div class='row'> 
<div class='col-xs-2'>
</div>
<div class='col-xs-10'>

";

echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image2']."' >";

echo"
</div></div></div>

";


echo"<div class='container'><center> <h1>".$row['name']." </h1> </center></div>";

echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-4'>
";

echo"<p><b><i> ".$row['rating']."/ 5.0 </i></b></p>";
echo"</div>";
echo"<div class='col-xs-8'><h1>";

$link= $row['link'];

if (strpos($link, 'https://') !== false) {
echo"<a href='".$link."'>click to Purchase </a>";
}
elseif (strpos($link, 'http://') !== false) {
echo"<a href='".$link."'>click to Purchase </a>";
}else{
echo"<a href='https://".$link."'>click to Purchase</a>";
}

echo"</h1></div></div></div>";
echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-6'>
";

echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image3']."' >";
echo"</div>";
echo"<div class='col-xs-6'>";
echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image4']."' >";
echo"</div></div></div>";

echo"<h1>Full Description </h1>";

echo "<pre>" . $row['description'] . "</pre>";
echo"<h1>Full Features </h1>";

echo "<pre>" . $row['features'] . "</pre>";


echo"<hr/>";
}

echo"</div>";

mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>

