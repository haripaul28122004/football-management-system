<?php
$conn = mysqli_connect('localhost','root','','fcms');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_teams = 'SELECT TeamName FROM team';
$result_teams = mysqli_query($conn, $sql_teams);

if ($result_teams) {
    
    $tname = array();

    
    while ($row = mysqli_fetch_assoc($result_teams)) {
        $tname[] = $row['TeamName'];
    }

    
    mysqli_free_result($result_teams);
} else {
    echo 'Error querying database: ' . mysqli_error($conn);
}

$sql_tournaments = 'SELECT TournamentName FROM tournament';
$result_tournaments = mysqli_query($conn, $sql_tournaments);

if ($result_tournaments) {
    
    $toname = array();

    
    while ($row = mysqli_fetch_assoc($result_tournaments)) {
        $toname[] = $row['TournamentName'];
    }

    
    mysqli_free_result($result_tournaments);
} else {
    echo 'Error querying database: ' . mysqli_error($conn);
}


mysqli_close($conn);
?>

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
    height:55%;
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
        margin-top: 10px;
        width: 40%;
        text-align: right;
        margin-right: 10px;
    }
    form input {
        margin-top: 5px;
        width: 50%;
        
    }
    form h1{
        color:white;
        font-family: agency fb;
    }
form p{
    margin-top: 20px;
    font-size: 20px;
    font-style: italic;
    text-align: center;}
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
    padding-top: 5px;
    padding-left: 50%;
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
                <li><a href="user_dashboard.php">Home</a></li>
                <li><a  href="display_tournament.php">Tournament</a></li>
                <li><a  href="display_fixtures.php">Fixtures</a></li>
                <li><a  href="user_login.php">Log Out</a></li>
            </ul>
        </nav>
        <div class='tournament'>
            <form  method="POST" action="tournament_team_register.php">
            <img src="logo3.png"> 
            <h1>Tournament Registration</h1>
                <label>Team Name</label>
                <select id="tename" name="TeamName">
            <?php
        
            foreach ($tname as $name) {
                echo '<option value="' . $name . '">' . $name . '</option>';
            }
            ?>
        </select><br>
        <label>Tournament Name</label>
                <select id="toname" name="TournamentName">
            <?php
        
            foreach ($toname as $trname) {
                echo '<option value="' . $trname . '">' . $trname . '</option>';
            }
            ?>
        </select>
        <div class='button'>
                <input type="submit" name="" value="Register" class='button1'></div>
                <p>If your team name is not listed!!!<a href="teamregistration.php">Register Here</a></p>
                </form></div>
        <!-- Mobile Bottom Nav -->
        <div class="mobile-bottom-nav">
            <a href="user_dashboard.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Home</span>
            </a>
            <a href="display_tournament.php" class="nav-item active">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/></svg>
                <span>T-ment</span>
            </a>
            <a href="display_fixtures.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                <span>Fixtures</span>
            </a>
            <a href="user_login.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
                <span>Logout</span>
            </a>
        </div>
    </body>
</html>

