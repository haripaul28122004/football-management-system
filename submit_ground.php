<?php
$conn = require_once 'db.php'; $conn = $con;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$ground_name = $_POST['GroundName'];
$location = $_POST['Location'];
$contact_person = $_POST['ContactPerson'];
$phone = $_POST['PhoneNo'];
$capacity = $_POST['Capacity'];
$features=$_POST['features'];
$feature=implode(',',$features);
$rent=$_POST['Rent'];

// Inserting first five values into 'team_info' table
$sql_ground_info = "INSERT INTO ground(GroundName, Location, ContactPerson, PhoneNo, Capacity, features, Rent) 
                  VALUES ('$ground_name', '$location', '$contact_person', '$phone', '$capacity', '$feature','$rent')";

if ($conn->query($sql_ground_info) === TRUE) {
    echo "<script type='text/javascript'> alert('Ground data has been Registered')</script>";
} else {
    echo "Error in Registration. Try Again!!!!";
}
?>