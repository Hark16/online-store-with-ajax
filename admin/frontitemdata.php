<?php
include "databaseConnection.php";
//session_start();

if(isset($_SESSION['name'])){
$wln= $_SESSION['wln'];
$name= $_SESSION['name'];
$id= 'no id';
$description= $_SESSION['description'];
$features= $_SESSION['features'];
$link= $_SESSION['link'];
$rating= $_SESSION['rating'];
$image1= $_SESSION['image1'];
$image2= $_SESSION['image2'];
$image3= $_SESSION['image3'];
$image4= $_SESSION['image4'];
$front= $_SESSION['front'];
$inswork= "INSERT INTO $wln (name, live, image1, image2, image3, image4, unique_id, description, features, link, rating, link_text, front_note) VALUES('$name', 'private/not live', '$image1', '$image2', '$image3', '$image4', '$id', '$description', '$features', '$link', '$rating', 'View Detail', '$front')";
mysqli_query($conn, $inswork);

   header("Location: frontitem.php");
}

if(isset($_GET['name'])){
$wln= $_GET['front_tab'];
$name= $_GET['name'];
$id= 'no id';
$description= $_GET['description'];
$features= $_GET['features'];
$link= $_GET['link'];
$rating= $_GET['rating'];
$image1= $_GET['image1'];
$image2= $_GET['image2'];
$image3= $_GET['image3'];
$image4= $_GET['image4'];
$front= $_GET['front_note'];
$inswork= "INSERT INTO $wln (name, live, image1, image2, image3, image4, unique_id, description, features, link, rating, link_text, front_note) VALUES('$name', 'private/not live', '$image1', '$image2', '$image3', '$image4', '$id', '$description', '$features', '$link', '$rating', 'View Deal', '$front')";
mysqli_query($conn, $inswork);

   header("Location: frontitem.php");
}

?>
