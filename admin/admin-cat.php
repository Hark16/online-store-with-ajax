<?php

include "databaseConnection.php";



$sql = "CREATE TABLE admin_categories(id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(250) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMp, live VARCHAR(100) NOT NULL, display_name TEXT NOT NULL)";


if ($conn->query($sql) === TRUE) {

echo "account created successfully";
}
else {

echo "Error creating account: " . $conn->error;
}

$conn->close();

?>
