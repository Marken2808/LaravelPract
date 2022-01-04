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

    // define variables and set to empty values
    $nameErr = $emailErr = $schoolErr = "";
    $name = $email = $school = "";


    if(isset($_POST['submit'])) {
        if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["school"])){
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        

            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        
            $school = test_input($_POST["school"]);



            $query = "INSERT INTO Member (name, email, school) VALUES ('$name', '$email', '$school')";

            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if ($run) {
                echo 'Form submitted successfully';
            } else {
                echo 'Form not registered';
            }
        } else {
            echo 'All fields required';
        }
    }



    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($_POST["name"])) {
    //         $nameErr = "Name is required";
    //     } else {
    //         $name = test_input($_POST["name"]);
    //         // check if name only contains letters and whitespace
    //         if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    //             $nameErr = "Only letters and white space allowed";
    //         }
    //     }

    //     if (empty($_POST["email"])) {
    //         $emailErr = "Email is required";
    //     } else {
    //         $email = test_input($_POST["email"]);
    //         // check if e-mail address is well-formed
    //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //             $emailErr = "Invalid email format";
    //         }
    //     }

    //     if (empty($_POST["school"])) {
    //         $schoolErr = "School is required";
    //     } else {
    //         $school = test_input($_POST["school"]);
    //     }
        

    //     if (empty($_POST["gender"])) {
    //         $genderErr = "Gender is required";
    //     } else {
    //         $gender = test_input($_POST["gender"]);
    //     }
    // }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>