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
        <link rel="stylesheet" href="responsive.css">
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
        <!-- Mobile Bottom Nav -->
        <div class="mobile-bottom-nav">
            <a href="homepage.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Home</span>
            </a>
            <a href="userplayerview.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                <span>Players</span>
            </a>
            <a href="gallery.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c0 1.1.9-2 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                <span>Gallery</span>
            </a>
            <a href="user_login.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M11 7L9.6 8.4l3.6 3.6H2v2h11.2L9.6 17.6 11 19l6-6-6-6zm7-4h-8c-1.1 0-2 .9-2 2v4h2V5h8v14h-8v-4h-2v4c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
                <span>Login</span>
            </a>
        </div>
    </body>
</html>