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
    font-family: agency fb;
    color:red;
    background-color: darkblue;
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
    color:darkblue;
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
.gallery {
    padding-top: 20px;
    display: flex;
    justify-content: center;
    height: 1100px;
        }

        .main{
    text-align: left;
    padding-left: 2%;
    width: 50%;
}
.main2{
    width: 50%;;
    font-size: 0;
}
.jacky{
    width:680px;
    height:450px;
}
.main img{

    border: 5px solid white; 
    box-sizing: border-box; 
    display:block; 
}
.main2 img{
border: 5px solid white; 
box-sizing: border-box; 
display:inline-block; 
    font-size: initial;
}
.main2 br{
    display: none;
}
.gif-container {
    margin-left: 48%;
}

.gif-container img {
    max-width: 100%; 
    margin-bottom: 8%;
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
                <li><a  href="user_login.php">Log In</a></li>
                <li><a  href="admin_login.php">Admin</a></li>
            </ul>
        </nav>
        <h1 align="center">ARCHIVES</h1>
        <div class="gallery">    
    <div class="main">
        <img src="ji2.jpg" alt="Image 1"  >
        <img src="sfc.jpg" alt="Image 6" width=730px height=450px>
    </div>
    <div class="main2">
    <img src="10.jpg" alt="Image 2" class="jacky"><br>
        <img src="ji5.jpg" alt="Image 3" width=300px height=175px><img src="cs.jpg" alt="Image 4" width=380px height=175px>
        <img src="ha.jpg" alt="Image 5" width=500px height=415px><img src="ni.jpg" alt="Image 6" width=180px height=415px>
    </div>
</div>
<div class="gif-container">
        <img src="logo3.png" alt="football">
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
            <a href="gallery.php" class="nav-item active">
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