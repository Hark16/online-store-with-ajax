
<?php
include "databaseConnection.php";


$wln = $_GET['wln'];
$idnum= $_GET['idnum'];

$table= $wln;




$sql = "DELETE FROM $table WHERE id=$idnum ";

mysqli_query($conn, $sql);




   header("Location: frontitem.php");

?>