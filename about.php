<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration form</title>
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
    background: darkblue;
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
transition: transform 2.5s;
}
nav img:hover {
    transform: perspective(500px) rotateY(360deg);
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
    color: white;
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

.about{
    padding-top: 20px;
    justify-content: center;
    height: 1000px;
}
.content_aimg{
    margin-left: 30%;
}
.content_a {
    width: 100%;
    margin-left: none;
    display: flex;
}
.ab {
    width: 50%; 
    padding-left: 10px;
}
.content_a h1 {
    font-size: 40px;
    font-family: agency fb;
    margin-bottom: 10px; 
}

.content_a p {
    text-align: justify;
    width: 50%; 
    margin-left: 10%; 
}

.mission-container {
    width: 50%;
    padding-left: 10%; 
}
.mission-container h2{
    font-family: agency fb;
    font-size: 30px;
    margin-bottom: 10px; 
}
.mission-list {
    text-align: justify;
    width: 70%; 
    margin-left: 10%; 
}
.gif-container {
    margin-top: 20px; /* Adjust margin as needed */
    margin-left: 45%;
}

.gif-container img {
    max-width: 100%; 
    width:60px;
height:50px;
    opacity: 0.5;
    transition: opacity 0.5s ease;
    transition: transform 2.5s;
    animation: rotateImage 4s linear infinite;
}
@keyframes rotateImage {
    0% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(360deg);
    }
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
<div class="about">
    <div class="content_aimg">
        <img src="ab.jpg" width="700px " height="500px" >
    </div>
        <div class="content_a">
            <div class="ab">
        <h1>About Us</h1><br>
         <p> St. Antony's Sports Club (SASC) was founded in June 1948
        as a residential Football academy for young talented players hailing from the 
        coastal belts of Trivandrum and Kanyakumari by the Latin Archdiocese of 
        Trivandrum. SASC is more than just a football club; we are a family. From our dedicated players and coaches to our loyal supporters and volunteers, each member plays a vital role in shaping the identity and success of our club. Together, we celebrate victories, overcome challenges, and forge lifelong friendships that extend far beyond the pitch.
    </p></div>
    <div class="mission-container">
        <br><br><br><br><br><br><br><h2>Our Mission</h2>
        <ul class="mission-list">
            <li>To promote the values of sportsmanship, teamwork, and dedication both on and off the field.</li>
            <li>To provide a safe and inclusive environment where players of all skill levels can develop their abilities and love for the game.</li>
            <li>To foster a sense of belonging and pride within our community, inspiring individuals to strive for excellence and contribute positively to society.</li>
        </ul>
    </div>
    </div>
    <div class="gif-container">
        <img src="logo3.png" alt="football">
    </div>
</div>
    </body>
</html>