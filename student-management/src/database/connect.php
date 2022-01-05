<?php

class Database {
  private $servername = "mysql";
  private $username = "root";
  private $password = "secret";
  private $dbname = "interviewdb";

  public function connect() {
    // Create connection
    $conn = new mysqli($this->servername, $this->username, $this->password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS interviewdb";
    if ($conn->query($sql) === TRUE) {
      // echo "Database created successfully";
      // Create table
      $this->create_table();
      return new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
    $conn->close(); 
    return null;

  }

  public function create_table() {
    // Create connection
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS Member (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(50) ,
            school VARCHAR(30) NOT NULL
            )";
    if ($conn->query($sql) === TRUE) {
      // echo "\nTable Member created successfully";
    }
    $conn->close();
  }
}
?>