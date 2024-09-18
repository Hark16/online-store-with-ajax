<?php

include "databaseConnection.php";
error_reporting(0);

$idnum=$_GET['idnum'];
$wln = $_GET['wln'];

$pub= "UPDATE $wln SET live='blocked' WHERE id= '$idnum' ";

mysqli_query($conn, $pub);

   header("Location: frontitem.php");

?>
