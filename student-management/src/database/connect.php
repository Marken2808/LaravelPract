<?php

class Database {
  private function connect() {
    $servername = "mysql";
    $username = "root";
    $password = "secret";
    $dbname = "interviewdb";
    // Create connection
    $conn = new mysqli("$servername:3306", $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }

  public function run($query, $data = array(), $data_type = "object")  {
    $conn = $this->connect();
    $stm  = $conn->prepare($query);
    if($stm) {
      $check = $stm->execute($data);
      if($check) {
        $data = $stm->fetch();
        if(is_array($data) && count($data)){
          return $data;
        }
      }
    }
    return false;
  }

}
?>