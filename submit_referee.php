<?php
$conn = require_once 'db.php'; $conn = $con;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['Name'];
$age = $_POST['Age'];
$email = $_POST['Email'];
$phone = $_POST['PhoneNo'];
$match = $_POST['MatchTypes'];
$experience=$_POST['Experience'];

// Inserting first five values into 'team_info' table
$sql_referee_info = "INSERT INTO referee(Name, Age, Email, PhoneNo, MatchTypes, Experience) 
                  VALUES ('$name', '$age', '$email', '$phone', '$match', '$experience')";

if ($conn->query($sql_referee_info) === TRUE) {
    echo "<script type='text/javascript'> alert('Referee data has been Registered')</script>";
} else {
    echo "Error in Registration. Try Again!!!!";
}
?>