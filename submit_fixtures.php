<?php
$conn = require_once 'db.php'; $conn = $con;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$tournament_name = $_POST['TournamentName'];
$home = $_POST['Home'];
$away = $_POST['Away'];
$date = $_POST['Date'];
$time = $_POST['Time'];


$sql_fixtures_info = "INSERT INTO fixtures(TournamentName, Home, Away,Date, Time) 
                  VALUES ('$tournament_name', '$home', '$away','$date','$time')";

if ($conn->query($sql_fixtures_info) === TRUE) {
    echo "<script type='text/javascript'> alert('Fixtures Updated')</script>";
} else {
    echo "Error: " ;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fixtures updation</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <nav>
            <img src="logoc.png">   
            <ul>
            <li><a href="admin_dashboard.php">Home</a></li>
                <li><a href="groundregister.php">Ground</a></li>
                <li><a  href="referee_register.php">Referee</a></li>
                <li><a  href="tournament.php">Tournament</a></li>
                <li><a  href="fixtures.php">Fixtures</a></li>
                <li><a  href="admin_login.php">Log Out</a></li>
            </ul>
        </nav>
        <div class="landingpage">  
          <div class="text">
           <h1>  Fixtures Updated</h1>
          </div> 
        </div>
    </body>
</html>
