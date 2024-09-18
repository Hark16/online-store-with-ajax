
<?php

if(isset($_GET['front'])){

include "databaseConnection.php";
error_reporting(0);

$idnum=$_GET['idnum'];
$wln = $_GET['wln'];
$link= $_GET['link'];
$rating= $_GET['rating'];
$image1= $_GET['image1'];
$image2= $_GET['image2'];
$image3= $_GET['image3'];
$image4= $_GET['image4'];


$pub= "UPDATE $wln SET link='$link' WHERE id= '$idnum' ";
mysqli_query($conn, $pub);

$pub1= "UPDATE $wln SET rating='$rating' WHERE id= '$idnum' ";
mysqli_query($conn, $pub1);

$pub2= "UPDATE $wln SET image1='$image1' WHERE id= '$idnum' ";
mysqli_query($conn, $pub2);
$pub3= "UPDATE $wln SET image2='$image2' WHERE id= '$idnum' ";
mysqli_query($conn, $pub3);
$pub4= "UPDATE $wln SET image3='$image3' WHERE id= '$idnum' ";
mysqli_query($conn, $pub4);
$pub5= "UPDATE $wln SET image4='$image4' WHERE id= '$idnum' ";
mysqli_query($conn, $pub5);

   header("Location: frontitem.php");

}else{

include "databaseConnection.php";
error_reporting(0);

$idnum=$_GET['idnum'];
$scname= $_GET['scname'];
$cname= $_GET['cname'];

$wln= $cname."_".$scname."_category";
$link= $_GET['link'];
$rating= $_GET['rating'];
$image1= $_GET['image1'];
$image2= $_GET['image2'];
$image3= $_GET['image3'];
$image4= $_GET['image4'];

$pub= "UPDATE $wln SET link='$link' WHERE id= '$idnum' ";
mysqli_query($conn, $pub);

$pub1= "UPDATE $wln SET rating='$rating' WHERE id= '$idnum' ";
mysqli_query($conn, $pub1);

$pub2= "UPDATE $wln SET image1='$image1' WHERE id= '$idnum' ";
mysqli_query($conn, $pub2);
$pub3= "UPDATE $wln SET image2='$image2' WHERE id= '$idnum' ";
mysqli_query($conn, $pub3);
$pub4= "UPDATE $wln SET image3='$image3' WHERE id= '$idnum' ";
mysqli_query($conn, $pub4);
$pub5= "UPDATE $wln SET image4='$image4' WHERE id= '$idnum' ";
mysqli_query($conn, $pub5);


   header("Location: item.php?cname=$cname& scname=$scname");

}
?>
