<?php
$conn = mysqli_connect('localhost','root','','fcms');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$team_name = $_POST['TeamName'];
$team_size = $_POST['TeamSize'];
$captain = $_POST['Captain'];
$email = $_POST['Email'];
$phone = $_POST['PhoneNo'];

// Inserting first five values into 'team_info' table
$sql_team_info = "INSERT INTO team(TeamName, TeamSize, Captain, Email, Phoneno) 
                  VALUES ('$team_name', '$team_size', '$captain', '$email', '$phone')";

if ($conn->query($sql_team_info) === TRUE) {
    echo "<script type='text/javascript'> alert('team data has been Registered')</script>";
} else {
    echo "Error: " . $sql_team_info . "<br>" . $conn->error;
}

// Retrieving the last insert ID to use in the next insert
$team_id = $conn->insert_id;



// Check if file is a CSV file
if($_FILES['file']['name'])
{
    $filename=explode(".",$_FILES['file']['name']);

    if($filename[1]=="csv"){
        $handle=fopen($_FILES['file']['tmp_name'],'r');

        while($data=fgetcsv($handle)){
            $item1=mysqli_real_escape_string($conn,$data[0]);
            $item2=mysqli_real_escape_string($conn,$data[1]);
            $item3=mysqli_real_escape_string($conn,$data[2]);
            $item4=mysqli_real_escape_string($conn,$data[3]);
            $item5=mysqli_real_escape_string($conn,$data[4]);
            $query="INSERT into players(TeamID,Name,DOB,Age,Gender,Position) values('$team_id','$item1','$item2','$item3','$item4','$item5')";
            mysqli_query($conn,$query);
        }
        fclose($handle);
        echo "<script type='text/javascript'> alert('Player data has been Registered')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('ERROR in Uploading data')</script>";
    }
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

<div class="logocontainer">
<img src="logoc.png">
</div>
            
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a  href="gallery.php">Gallery</a></li>
                <li><a  href="contact.php">Contact Us</a></li>
                <li><a  href="user_login.php">Log IN</a></li>
                <li><a  href="admin_login.php">Admin</a></li>
            </ul>
        </nav>
        <div class="landingpage">
            <div class="content_1">
                <div class="text_1">
                    Develope your game<br>
                    With Us<br>
                </div>
            </div>
        </div>
       
    </body>
</html>
