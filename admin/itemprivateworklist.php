<?php

include "databaseConnection.php";
error_reporting(0);

$idnum=$_GET['idnum'];
$scname= $_GET['scname'];
$cname= $_GET['cname'];

$wln= $cname."_".$scname."_category";

$pub= "UPDATE $wln SET live='blocked' WHERE id= '$idnum' ";

mysqli_query($conn, $pub);

   header("Location: item.php?cname=$cname& scname=$scname");

?>
