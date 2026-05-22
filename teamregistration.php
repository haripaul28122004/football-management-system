<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width, initial-scale=1">
<title>team register</title>
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
<form action="submit_registration.php" method="POST" enctype="multipart/form-data">
<img src="logo3.png">
<h1>Team Registration</h1>
<label>Team Name</label>
<input type="text" name="TeamName" placeholder="Enter Team Name" required>
<label>Team Size</label>
<input type="text" name="TeamSize" placeholder="Enter Team Size" required>
<label>Captain Name</label>
<input type="text" name="Captain" placeholder="Enter Captain Name" required>
<label>Email</label>
<input type="email" name="Email" placeholder="Enter Email" required>
<label>Phone No</label>
<input type="tel" name="PhoneNo" placeholder="Enter Phone No" required>
<label>Upload your players data(only CSV file)</label>
<input type="file" id="file" name="file" accept=".csv">
<div class='button'>
<input type="submit" name="" value="Submit" class="button1"></div>
</form>
</div>
</body>
</html>