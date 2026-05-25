<?php
require 'db.php';
if(isset($_POST["submit"])){
    $name=$_POST["Name"];
    $position=$_POST["position"];
    $dob=$_POST["DOB"];
    $matches=$_POST["matches"];
    $goals=$_POST["goals"];
    if($_FILES["image"]["error"]===4){
        echo"<script>alert('Image doest not exist');</script>";
    }
    else{
        $fileName=$_FILES["image"]["name"];
        $fileSize=$_FILES["image"]["size"];
        $tmpName=$_FILES["image"]["tmp_name"];

        $validImageExtension=['jpg', 'png','jpeg'];
        $imageExtension=explode('.',$fileName);
        $imageExtension=strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo "<script> alert('Invalid Image Extension');</script>";
        }
        else if($fileSize>1000000){
            echo "<script> alert('Image size is too large');</script>";
        }
        else{
            $newImageName=uniqid();
            $newImageName .='.' . $imageExtension;

            if (!file_exists('img')) {
                mkdir('img', 0777, true);
            }
            move_uploaded_file($tmpName, 'img/' .$newImageName);
            $query="INSERT INTO  playerdetails VALUES('', '$name', '$position','$dob', '$matches', '$goals','$newImageName')";
            mysqli_query($con, $query);
            echo "<script> alert('Successfully Added');
            document.location.href='sampledisplayy.php';
            </script>";
        }
    }

}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width, initial-scale=1">
<title>IMAGE UPLOAD</title>
<style>
    body {
        background-color: var(--secondary-bg) !important;
    }
    .tournament {
        background: transparent !important;
        min-height: calc(100vh - 75px);
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 40px 15px !important;
    }
    /* Let the modern form display nicely */
    form {
        position: relative !important;
        left: auto !important;
        top: auto !important;
        margin: 0 auto !important;
    }
    form select {
        width: 100% !important;
        margin: 10px 0 !important;
    }
    form input[type="file"] {
        border: none !important;
        padding: 8px 0 !important;
    }
</style>
<link rel="stylesheet" href="responsive.css">
</head>
<body>
    <nav>

        <div class="logocontainer">
        <img src="logo3.png">
        </div>
                    
                    <ul>
                    <li><a href="user_dashboard.php">Home</a></li>
                        <li><a href="display_tournament.php">Tournament</a></li>
                        <li><a href="display_fixtures.php">Fixtures</a></li>
                        <li><a  href="user_login.php">Log Out</a></li>
                    </ul>
                </nav>
<div class="tournament">
<form action="" method="POST" enctype="multipart/form-data">
<img src="logo3.png">
<h1>Image Upload</h1>
<label>Name</label>
<input type="text" name="Name" placeholder="Enter  Name" required>
<label>Position</label>
                <select name="position">
                <option value="Forward">Forward</option>
                <option value="Mid Fielder">Mid fielder</option>
                <option value="Defender">Defender</option>
                <option value="Goalkeeper">Goal Keeper</option>
                </select>
<label>DOB</label>
<input type="date" name="DOB" placeholder="Enter  DOB" required>
<label>Matches Played</label>
<input type="text" name="matches" placeholder="Enter  matches" required>
<label>Goals Scored</label>
<input type="text" name="goals" placeholder="Enter  goals" required>
<label>Image</label>
<input type="file" name="image" accept=".jpg, .png, .jpeg" value="">
<div class='button'>
<input type="submit" name="submit" value="Submit" class="button1"></div>
<a href="sampledisplayy.php">Player details</a>
</form>
</div>
</body>
</html>