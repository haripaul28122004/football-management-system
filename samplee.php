<?php
require 'db.php';
if(isset($_POST["submit"])){
    $name=$_POST["name"];
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
            $query="INSERT INTO  images VALUES('', '$name','$newImageName')";
            mysqli_query($con, $query);
            echo "<script> alert('Successfully Added');
            document.location.href='data.php';
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
    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
body{
    font-family: montserrat;
}
nav{
    background:white;
    width: 100%;
    display:flex;
	justify-content:space-between;
}
.logocontainer{
padding:10px 40px;
}

nav img{
width:80px;
height:70px;
}

nav ul{
 float: right;
    margin-right: 20px;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 20px;
}
nav ul li a{
    color: darkblue;
    font-family: agency fb;
    font-size: 18px;
    font-weight: bold;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}
a.active,a:hover{
    background: #1b9bff;
    transition: .5s;
}
.signimg{
    padding-top: 20px;
    background-image: url("ji2.jpg");
    height:600px;
}

.signup{
 width: 360px;
 height: 550px;
 margin: auto;
 background:lightgreen;
 border-radius: 3px;
}
.tournament{
    margin: 0px;
    background:url(adbg.jpg);
    background-size:cover;
    background-repeat: no-repeat;
    height: 750px;
}

h1{
 text-align:center;
}

h4{
text-align: center;
padding-top: 15px;
}

form{
    background-color: #f9f9f934;
    height:70%;
    width:26%;
    position: absolute;
    top:20%;
    left:38.5%;
    padding:20px;
    border-radius: 10px;
    color:black;
}

form label {
        display: inline-block;
        margin-top: 20px;
        width: 40%;
        text-align: right;
        margin-right: 10px;
    }
    form input {
        margin-top: 5px;
        width: 50%;
        
    }
form p{
    margin-top: 30px;
    font-size: 20px;
    font-style: italic;
    text-align: center;
}
form p a{
     text-decoration: none;
     color:darkred;
  
}
form select{
        margin:20px;
    }

form img{
    width:100px;
height:75px;
    display: block;
        margin: 0 auto;
}
.button1:hover {
    background-color: #1b9bff;
    color: white;
}
.button1{
    padding: 3px 8px;
    border:2px solid black;
    color:black;
    background-color: aliceblue;
    font-size: medium;
    border-radius: 10px;
}
form h1{
    color:white;
    font-family: agency fb;
}
.button{
    padding-top: 10px;
    padding-left: 50%;
}


</style>
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
<input type="text" name="name" placeholder="Enter  Name" required>
<label>Image</label>
<input type="file" name="image" accept=".jpg, .png, .jpeg" value="">
<div class='button'>
<input type="submit" name="submit" value="Submit" class="button1"></div>
<a href="data.php">Data</a>
</form>
</div>
</body>
</html>