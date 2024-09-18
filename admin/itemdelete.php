
<?php
include "databaseConnection.php";


$scname= $_GET['scname'];
$cname= $_GET['cname'];
$idnum= $_GET['idnum'];

$table= $cname."_".$scname."_category";




$sql = "DELETE FROM $table WHERE id=$idnum ";

mysqli_query($conn, $sql);

   header("Location: item.php?cname=$cname& scname=$scname");

?>