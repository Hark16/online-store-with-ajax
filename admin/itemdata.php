<?php
include "databaseConnection.php";
session_start();


$cname = $_SESSION['cname'];
$scname= $_SESSION['scname'];
$wln= $_SESSION['wln'];
$name= $_SESSION['name'];


$description= $_SESSION['description'];
$features= $_SESSION['features'];
$link= $_SESSION['link'];
$rating= $_SESSION['rating'];
$image1= $_SESSION['image1'];
$image2= $_SESSION['image2'];
$image3= $_SESSION['image3'];
$image4= $_SESSION['image4'];

$front= $_SESSION['front'];





$inswork= "INSERT INTO $wln (name, live, image1, image2, image3, image4, unique_id, description, features, link, rating, link_text, front_note) VALUES('$name', 'private/not live', '$image1', '$image2', '$image3', '$image4', 'no id', '$description', '$features', '$link', '$rating', 'View Deal', '$front')";

mysqli_query($conn, $inswork);


   header("Location: item.php?cname=$cname&scname=$scname");


?>
