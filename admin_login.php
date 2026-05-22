<?php
   session_start();

   include("db.php");

   if($_SERVER['REQUEST_METHOD']=="POST")
   {
    $email= $_POST['Email'];
    $password= $_POST['Password'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query= "select * from admin where Email='$email' limit 1";
        $result= mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);

                if($user_data['Password']==$password)
                {
                    header("location: admin_dashboard.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
   }

?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width, initial-scale=1">
<title>Admin Log In</title>
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
    font-size: 19px;
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
    margin: 0px;
    background:url(adbg.jpg);
    background-size:cover;
    background-repeat: no-repeat;
    height: 605px;
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
    height:50%;
    width:26%;
    position: absolute;
    top:20%;
    left:38.5%;
    padding:15px;
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
        font-family: montserrat;
        text-align: right;
        margin-right: 10px;
    }
    form input {
        margin-top: 5px;
        width: 40%;
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
                        <li><a  href="user_login.php">Log IN</a></li>
                        <li><a  href="admin_login.php">Admin</a></li>
                    </ul>
                </nav>
<div class="login">
<form method="POST">
<img src="logo3.png"> 
<br>
<h1>Admin Log In</h1>
<label>Email</label>
<input type="email" name="Email" placeholder="enter email" required>
<label>Password</label>
<input type="password" name="Password" placeholder="enter password" required>
<div class='button'>
<input type="submit" name="" value="Submit" class='button1'></div>
</form>
</div></div>
</body>
</html>