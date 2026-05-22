<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Conatct Us</title>
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
    font-size: 19px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
    font-weight: bolder;
}
a.active,a:hover{
    background: #1b9bff;
    transition: .5s;
}
.contact{
    padding-top: 20px;
    display: flex;
    justify-content: center;
    background:url(adbg.jpg);
    background-repeat: no-repeat;
   background-size: cover;
   height: 605px;
}
.content{
    margin-left: 25%;
    text-align: left;
    width: 50%;
    margin-top: 10%;
    color:white;
    font-family: algerian;
}
.content a{
    color:darkblue;
}
.queries{
    margin-right: 5px;
    width: 50%;
}
form{
    background-color: #f9f9f934;
    height:57%;
    width:26%;
    position: absolute;
    top:30%;
    left:50%;
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
        display: inline-block;
    width: 50%;
    margin-top: 10px;
    margin-left: 30%;
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
.button{
    padding-top: 10px;
}
form textarea {
    display: inline-block;
    width: 50%;
    margin-top: 10px;
    margin-left: 30%;
}

.queries h1{
text-align: center;
padding-top: 15px;
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
        <div class="contact">
        <div class="content">
      <br><br><h1>CONTACT</h1>
      <p><strong>Address:</strong> </p>
            <p><strong>Phone:</strong> 9587234167</p>
            <p><strong>Email:</strong> <a href="mailto:sascvallavilai@gmail.com">sascvallavilai@gmail.com</a></p>
            <p><strong>Social Media:</strong> Follow us on <a href="https://www.instagram.com/sascvallavilaiofficial/">Instagram</a></p>
        </div>
      <div class="queries">
      <form  method="POST">
            <img src="logo3.png">
            <h1>Feedback</h1>
                <input type="text" name="Name" placeholder="Enter Name" required>
                <input type="text" name="Email" placeholder="Enter Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <div class='button'>
                <input type="submit" name="" value="Submit" class='button1'></div>
            </form>
      </div>
      </div>
    </body>
</html>

