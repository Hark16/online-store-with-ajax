<?php
include "databaseConnection.php";
session_start();
$scname= $_SESSION['scname'];
$cname= $_SESSION['cname'];
$subtable_name= $_SESSION['subtable_name'];
$description= $_SESSION['description'];
$ex1= $_SESSION['ex1'];
$ex2= $_SESSION['ex2'];
$display= $_SESSION['display'];


$table5 = "CREATE TABLE $subtable_name (id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(250) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMp, live VARCHAR(100) NOT NULL, image1 TEXT, image2 TEXT, image3 TEXT, image4 TEXT, unique_id TEXT NOT NULL, features TEXT NOT NULL, description TEXT NOT NULL, rating TEXT NOT NULL, link TEXT NOT NULL, link_text TEXT NOT NULL, front_note TEXT)";


mysqli_query($conn,$table5);
$wln= ($cname."_category");

$inswork= "INSERT INTO $wln (display_name, name, live, description, example1, example2) VALUES('$display', '$scname', 'private/not live', '$description', '$ex1', '$ex2')";

mysqli_query($conn, $inswork);


   header("Location: subcategory.php?cname=$cname");


?>
