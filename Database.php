<?php

class Database { 

    // Define the following properties within the Database class
    private $user = 'tricia-mj';
    private $password = '000_sfumato';
    private $db = 'ite601';
    private $host = 'localhost';

    // Method that handles the connection to the database
    public function connect() {

        // Creates the mysqli connection
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        // Checks the connection
        if ($conn->connect_error) {
            return "Connection failed: " . $conn->connect_error;
        } else {
            return "Connected successfully";
        }
    } 
}

?>