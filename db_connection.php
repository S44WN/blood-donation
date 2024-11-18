<?php

// Connection parameters for the database
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_database = 'blood_donation';

// Connect to the database using the mysqli extension
$con = mysqli_connect($db_host, $db_user, $db_password, $db_database);

// If the connection fails, display an error message
if (mysqli_connect_errno()) {
  die('Could not connect: ' . mysqli_error($con));
}

?>