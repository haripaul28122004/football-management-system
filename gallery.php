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
    </body>
</html>