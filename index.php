<?php

// Include the Database.php file
include 'Database.php';

// Instantiate the Database class
$database = new Database();

// Call the connect() method and display the connection status 
echo $database->connect();

?>