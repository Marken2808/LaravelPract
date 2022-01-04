<?php

class Database {
  private $servername = "mysql:3306";
  private $username = "root";
  private $password = "secret";
  private $dbname = "interviewdb";

  protected function connect() {
    
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }

  // public function run($query, $data = array(), $data_type = "object")  {
  //   $conn = $this->connect();
  //   $stm  = $conn->prepare($query);
  //   if($stm) {
  //     $check = $stm->execute($data);
  //     if($check) {
  //       $data = $stm->fetch();
  //       if(is_array($data) && count($data)){
  //         return $data;
  //       }
  //     }
  //   }
  //   return false;
  // }

}
?>