<?php
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-size: cover;
  background-position: center;
  color: white;
  height: 400px; /* Fixed height for the cards */
  display: flex;
  flex-direction: column;
  justify-content: flex-end; /* Align items at the bottom */
}

.card-content {
  margin-top: auto;
  background: rgba(0, 0, 0, 0.5); /* Optional: Add background for better text readability */
  width: 100%;
  padding: 10px;
}
*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
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
h2{
  font-family: agency fb;
  color: darkblue;
}
.landingpage
{
    background-image: url('ch.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: 110% ;
    display: flex;
    justify-content: space-around;
    padding: 40px;
    height: 600px;
}
.content_1{
    font-family: sans-serif;
    justify-content: left;
    align-items: left;
    width: 50%;
    text-align: left;

}
.text_1
{
    justify-content: left;
    font-size: xx-large;
    font-weight: bolder;
    color:white;
    text-shadow: 5px 5px blue;
    align-items: left;
    text-align: left;  
}

.back a{
  margin-left: 50%;
  font-size: larger;
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
                <li><a href="sampledisplayy.php">Players</a></li>
                <li><a  href="gallery.php">Gallery</a></li>
                <li><a  href="contact.php">Contact Us</a></li>
                <li><a  href="user_login.php">Log In</a></li>
                <li><a  href="admin_login.php">Admin</a></li>
            </ul>
        </nav>
        <br><br>
        <h2>Our Players</h2>
        <br><br>
<div class="row">
    <?php
    $rows = mysqli_query($con, "SELECT * FROM playerdetails ORDER BY id DESC");
    foreach ($rows as $row): ?>
        <div class="column">
            <div class="card" style="background-image: url('img/<?php echo $row['image']; ?>');">
                <div class="card-content">
                    <h3><?php echo $row["Name"]; ?></h3>
                    <p><?php echo $row["position"]; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<br><br><div class="back"><a href="playerdetails.php">Back</a></div>
</body>
</html>
