<?php
$server = "localhost";
$username = "root";
$dBpassword = "N@ruch1g0";
$dbName = "my_data";

$connection = new mysqli($server, $username, $dBpassword, $dbName);

if ($connection->connect_error) {
    die("Connection error: " . $connection->connect_error);
} else {
    echo "Connection ok<br/>";
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $levelOfStudy= $_POST["levelOfStudy"];
    $nickname = $_POST["nickname"];


    $sql = "INSERT INTO registration (firstName,SurName, dateOfBirth, level of study,nickname) 
            VALUES ('$firstName', '$lastName', '$dateOfBirth', '$levelOfStudy', '$nickname')";


    if ($connection->query($sql) === true) {
        echo "User registered successfully.";
        
        header("Location: Home.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
