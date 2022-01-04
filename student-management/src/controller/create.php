<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <?php
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

    // sql to create table
    $sql = "CREATE TABLE Member (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(50) ,
            school VARCHAR(30) NOT NULL
            )";

    if ($conn->query($sql) === TRUE) {
      echo "Table Member created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

    $conn->close();
    ?>
  </div>
</body>

</html>