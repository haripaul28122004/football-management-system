<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width, initial-scale=1">
<title>ground register</title>
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
    font-family: "agency fb";
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
.teamregister{
    margin: 0px;
    background:url(adbg.jpg);
    background-size:cover;
    background-repeat: no-repeat;
    height: 610px;
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
    height:78%;
    width:26%;
    position: absolute;
    top:20%;
    font-family: "agency fb";
    left:38.5%;
    padding:20px;
    border-radius: 10px;
    color:black;
}

form label {
    font-family: montserrat;
        display: inline-block;
        margin-top: 20px;
        width: 30%;
        text-align: right;
        margin-right: 10px;
    }
    form input {
        margin-top: 5px;
        width: 53%;
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
                         <li><a href="admin_dashboard.php">Home</a></li>
                <li><a href="groundregister.php">Ground</a></li>
                <li><a  href="referee_register.php">Referee</a></li>
                <li><a  href="tournament.php">Tournament</a></li>
                <li><a  href="fixtures.php">Fixtures</a></li>
                <li><a  href="admin_login.php">Log Out</a></li>
                    </ul>
                </nav>

<div class="teamregister">
<form action="submit_ground.php" method="POST">
<img src="logo3.png">
<h1>Ground Registration</h1>
<label>Ground Name</label>
                <input type="text" name="GroundName" placeholder="enter ground name" required>
                <label>Location</label>
                <input type="text" name="Location" placeholder="enter location" required>
                <label>Contact person</label>
                <input type="text" name="ContactPerson" placeholder="enter name of contact person" required>
                <label>Phone No</label>
                <input type="tel" name="PhoneNo" placeholder=" enter phone number" required>
                <label>Capacity</label>
                <input type="text" name="Capacity" placeholder="enter capacity" required>
                <label>Other Features</label>
                <input type="checkbox" name="features[]" value="Restaurant">Restaurant<br>
                <input type="checkbox" name="features[]" value="Restroom">Restroom<br>
                <input type="checkbox" name="features[]" value="Others">Others<br>
                <label>Rent</label>
                <input type="text" name="Rent" placeholder="enter rent amount" required>
                <div class='button'>
                <input type="submit" name="" value="Register" class='button1'></div>
</form>
</div></div>
</body>
</html>