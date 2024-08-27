<?php

class Database {

    //Define the following properties within the Database class
    private $user = 'tricia-mj';
    private $password = '000_sfumato';
    private $db = 'ite601';
    private $host = 'localhost';

    // Method that handles the connection to the database
    public function connect() {

        // Creates the connection
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        
    } 
}

?>