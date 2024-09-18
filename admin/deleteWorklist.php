
<?php
include "databaseConnection.php";
error_reporting(0);
session_start();

$name= $_GET['name'];
$username= $_GET['username'];
$idnum= $_GET['idnum'];
$table= ($username."_categories");

$subtable= $name.'_category';


$sql11 = "SELECT * FROM $subtable ";

if($result11 = mysqli_query($conn, $sql11)){
if(mysqli_num_rows($result11) > 0){

$_SESSION['info_delete']= 'no';
$_SESSION['main_cat']= $name;

   header("Location: subcategory.php?cname=".$name."&username=".$username);

}else{

$sql = "DELETE FROM $table WHERE id=$idnum ";
$del= "DROP TABLE $subtable ";
mysqli_query($conn, $del);
if (mysqli_query($conn, $sql)) {

   header("Location: profile.php");
}
}}

?>