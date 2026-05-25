<?php
$conn = require_once 'db.php'; $conn = $con;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$tournament_name = $_POST['TournamentName'];
$location = $_POST['Location'];
$owner = $_POST['Owner'];
$start = $_POST['StartingDate'];
$end = $_POST['EndingDate'];
$phone = $_POST['PhoneNo'];
$type = $_POST['Type'];
$fee=$_POST['EntryFees'];


$sql_tournament_info = "INSERT INTO tournament(TournamentName, Location, Owner, StartingDate, EndingDate, PhoneNo, Type, EntryFees) 
                  VALUES ('$tournament_name', '$location', '$owner','$start','$end', '$phone', '$type', '$fee')";

if ($conn->query($sql_tournament_info) === TRUE) {
    echo "<script type='text/javascript'> alert('tournament data has been Registered')</script>";
} else {
    echo "Error: " . $sql_tournament_info . "<br>" . $conn->error;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration form</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <nav>
            <img src="logoc.png">   
            <ul>
                <li><a href="admin_dashboard.php">Home</a></li>
                <li><a href="groundregister.php">Ground</a></li>
                <li><a  href="tournament.php">Tournament</a></li>
                <li><a  href="admin_login.php">Log Out</a></li>
            </ul>
        </nav>
        <div class="landingpage">  
          <div class="text">
           <h1> Tournament Registered</h1>
          </div> 
        </div>
    </body>
</html>
