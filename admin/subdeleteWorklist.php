
<?php
include "databaseConnection.php";
error_reporting(0);

$name= $_GET['name'];
$cname= $_GET['cname'];
$idnum= $_GET['idnum'];
$table= ($cname."_category");

$subtable= $cname."_".$name.'_category';

$sql = "DELETE FROM $table WHERE id=$idnum ";

$del= "DROP TABLE $subtable ";

mysqli_query($conn, $del);

if (mysqli_query($conn, $sql)) {

   header("Location: subcategory.php?cname=$cname");


}


?>