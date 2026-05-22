<?php
   session_start();
   
   include("db.php");

   if($_SERVER['REQUEST_METHOD']=="POST")
   {
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query="insert into users (fname,lname,gender,email,password) values('$firstname','$lastname','$gender','$email','$password')";

        mysqli_query($con,$query);

        echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Enter valid information')</script>";
    }
   }
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width, initial-scale=1">
<title>form login and register</title>
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
    position: fixed;
    background: white;
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
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
    font-weight: bold;
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
.login{
    padding-top: 2px;
    background:url(adbg.jpg);
    background-size:cover;
    background-repeat: no-repeat;
    height: 700px;
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
    height:80%;
    width:26%;
    position: absolute;
    top:20%;
    left:38.5%;
    padding:20px;
    border-radius: 10px;
    color:black;
}
form h1{
    font-family: agency fb;
    color:white
}

form label {
        display: inline-block;
        margin-top: 20px;
        width: 30%;
        text-align: right;
        margin-right: 10px;
    }
    form input {
        margin-top: 10px;
        width: 40%;
    }
    .radio{
        display: inline-block;
        padding-left: 30%;
    }
form p{
    margin-top: 25px;
    font-size: 20px;
    font-style: italic;
    text-align: center;
}
form p a{
     text-decoration: none;
     color:darkred;
  
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
.button{
    padding-top: 10px;
    padding-left: 40%;
}





</style>
</head>
<body>
    <nav>

        <div class="logocontainer">
        <img src="logo3.png">
        </div>
                    
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a  href="gallery.php">Gallery</a></li>
                        <li><a  href="contact.php">Contact Us</a></li>
                        <li><a  href="user_login.php">Log In</a></li>
                        <li><a  href="admin_login.php">Admin</a></li>
                    </ul>
                </nav>
<div class="login">
<form method="POST">
<img src="logo3.png"> 
<br>
<h1>Sign Up</h1>
<label>First Name</label>
<input type="text" name="fname" placeholder="Enter First Name" required>
<label>Last Name</label>
<input type="text" name="lname" placeholder="Enter Last Name" required>
<div class="gender"><label>Gender</label>
<div class='radio'>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
</div></div>
<label>Email</label>
<input type="email" name="email" placeholder="Enter email" required>
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password" required>
<div class='button'>
<input type="submit" name="" value="Submit" class='button1'></div>
<p>Already have an account?<a href="user_login.php">LogIn</a></p>
</form>
</div></div>
</body>
</html>