
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tournament</title>
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
    font-weight: bold;
    font-size: 18px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}
a.active,a:hover{
    background: #1b9bff;
    transition: .5s;
}

.teamregister{
    margin: 0px;
    background:url(adbg.jpg);
    background-size:cover;
    background-repeat: no-repeat;
    height: 615px;
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
    height:75%;
    width:26%;
    position: absolute;
    top:20%;
    left:38.5%;
    padding:20px;
    border-radius: 10px;
    font-family: "agency fb";
    color:black;
}

form label {
    font-family: montserrat;
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
.button{
    padding-top: 10px;
    padding-left: 50%;
}


</style>

    </head>
    <body>
        <nav>
            <img src="logo3.png" class="nav-logo">   
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
            <form action="submit_tournament.php" method="POST">
            <img src="logo3.png">
            <h1>Tournament Registration</h1>
                <label>Tournament Name</label>
                <input type="text" name="TournamentName" placeholder="Enter tournament Name" required>
                <label>Location</label>
                <input type="text" name="Location" placeholder="Enter Location" required>
                <label>Owner</label>
                <input type="text" name="Owner" placeholder="Enter Owner's Name" required>
                <label>Starting Date</label>
                <input type="date" name="StartingDate">
                <label>Ending Date</label>
                <input type="date" name="EndingDate">
                <label>Phone No</label>
                <input type="tel" name="PhoneNo" placeholder="Enter phone number" required>
                <label>Match type</label>
                <select name="Type">
                <option value="KO">Knockout</option>
                <option value="League">League</option>
                </select>
                <label>Entry Fee</label>
                <input type="text" name="EntryFees" placeholder="Enter Entry Fees" required>
                <div class='button'>
                <input type="submit" name="" value="Submit" class='button1'></div>
            </form>

    </body>
</html>

