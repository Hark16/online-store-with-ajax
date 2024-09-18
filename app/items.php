

<div class='container'>
<div class='row'> 

<div class='col-xs-6'>

<?php
$cname= $_GET['cname'];

echo"<a class='btn btn-warning' href='sub.php?cat=".$cname."'>back </a><br/><br/>";

?>
</div>
<div class='col-xs-6'>

<h1> all products  </h1>
<br/>
</div> </div> </div>

<?php


$scname= $_GET['scname'];
$wln= $cname."_".$scname."_category";

include "databaseConnection.php";

$sql = "SELECT * FROM $wln";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo "<div class='container'>";

while($row1 = mysqli_fetch_array($result)){


echo"<center><h1>".$row1['name']." </h1></center>";

echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-4'>

";

echo "<img src='".$row1['image1']."' />";
echo"</div>";
echo"<div class='col-xs-8'>";

echo"<pre>".$row1['front_note']." </pre>";
echo"</div></div>";

?>
<div class='row'> 
<div class='col-xs-4'>
<?php echo"<a href='".$row1['link']."'>amazon</a>";  ?>

</div>
<div class='col-xs-8'>

<button onclick='fun2("<?php echo$row1['link']; ?>");'>

go to Product
</button>
</div></div></div>

<?php

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


