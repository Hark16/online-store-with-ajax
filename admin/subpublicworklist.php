<?php

include "databaseConnection.php";
error_reporting(0);

$idnum=$_GET['idnum'];
$cname= $_GET['cname'];
$wln= $cname."_category";

$pub= "UPDATE $wln SET live='Live' WHERE id= '$idnum' ";

mysqli_query($conn, $pub);

   header("Location: subcategory.php?cname=$cname");

?>
