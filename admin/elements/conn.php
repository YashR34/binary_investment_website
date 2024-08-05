<?php
class DBConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "imaxcoin";
    private $connection;

    // Constructor
    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Get the database connection
    public function getConnection() {
        return $this->connection;
    }

    // Close the database connection
    public function closeConnection() {
        $this->connection->close();
    }
}
?>
