<?php

include '../model/member.php';

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

    // define variables and set to empty values
    $nameErr = $emailErr = $schoolErr = "";
    $member = new Member($_POST["name"], $_POST["email"], $_POST["school"]);
    // $name = $email = $school = "";


    if(isset($_POST['submit'])) {
        if(!empty($member->get_name()) && !empty($member->get_email()) && !empty($member->get_school())){
            $name = check($member->get_name());
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
            $email = check($member->get_email());
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            $school = check($member->get_school());

            $query = "INSERT INTO Member (name, email, school) VALUES ('$member->name', '$member->email', '$member->school')";
    
            $run = $conn->query($query) or die(mysqli_error($conn));
    
            if ($run) {
                echo 'Form submitted successfully, please go back and refresh';
            }
        } else {
            echo 'All fields required';
        }
        
    }

    function check($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>