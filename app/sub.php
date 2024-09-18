<div id='page1'>

<div class='container' >
<div class='row'> 

<div class='col-xs-6'>


<a class='btn btn-warning' href='index.php'>back </a><br/><br/>
</div>
<div class='col-xs-6'>

<h1><b>sub-category</b></h1>
</div></div></div>

<?php


$cname= $_GET['cat'];

$wln= $cname."_category";

include "databaseConnection.php";

$sql = "SELECT * FROM $wln";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){

echo"<center> <h1>".$row['display_name']." </h1> </center>";
echo"<pre><center> <b>".$row['description']." </b> </center></pre>";

//echo"<p><i> ".$row['example1'].". . . ".$row['example2']." . . . etc </i></p>";

?>

<button onclick='fun1("<?php echo$row['name']; ?>","<?php echo$cname; ?>");'>

go to <?php echo$row['display_name']; ?> Products
</button>

<?php

echo"<hr/>";
}

mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>

</div>

<div id='page2'>
</div>
