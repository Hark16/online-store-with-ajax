<?php
include "databaseConnection.php";
session_start();
$cname= $_SESSION['cname'];
$username= 'admin';
$table_name= $_SESSION['table_name'];
$display= $_SESSION['display'];


$table5 = "CREATE TABLE $table_name (id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(250) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMp, live VARCHAR(100) NOT NULL, description TEXT, example1 TEXT, example2 TEXT, display_name TEXT)";


mysqli_query($conn,$table5);
$wln= ($username."_categories");

$inswork= "INSERT INTO $wln (display_name, name, live) VALUES('$display', '$cname', 'private/not live')";

mysqli_query($conn, $inswork);

   header("Location: profile.php");


?>
