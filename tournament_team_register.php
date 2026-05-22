<?php
$conn = mysqli_connect('localhost','root','','fcms');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$teamre = $_POST['TeamName'];
$tourre = $_POST['TournamentName'];

// Inserting first five values into 'team_info' table
$sql_info = "INSERT INTO registered_teams(TeamName, TournamentName) 
                  VALUES ('$teamre', '$tourre')";

if ($conn->query($sql_info) == TRUE) {
    echo "<script type='text/javascript'> alert(' team has been Registered')</script>";
} else {
    echo "Error in Registration. Try Again!!!!";
}
?>