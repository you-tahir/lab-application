<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydata";


    $connnection = new mysqli($servername, $username, $password, $dbname);
    if ($connnection->connect_error){
        die("connection failed:" . $connnection->connect_error);
    }
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    $sql_query = "INSERT INTO students(full_name, email, gender) values ('$full_name', '$email', '$gender')";

    if ($connnection->query($sql_query)===TRUE){
        echo "New data added successfully";
    }
    else{
        echo "error: " . $sql_query . $connnection->error;
    }
}


?>