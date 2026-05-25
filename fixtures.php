<?php
$conn = require_once 'db.php'; $conn = $con;
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
    font-family: "agency fb";
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
    height:60%;
    width:26%;
    position: absolute;
    top:20%;
    left:38.5%;
    padding:20px;
    border-radius: 10px;
    font-family: agency fb;
    color:black;
}

form label {
    font-family:montserrat;
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
            <img src="logo3.png">   
            <ul>
            <li><a href="admin_dashboard.php">Home</a></li>
                <li><a href="groundregister.php">Ground</a></li>
                <li><a  href="referee_register.php">Referee</a></li>
                <li><a  href="tournament.php">Tournament</a></li>
                <li><a  href="fixtures.php">Fixtures</a></li>
                <li><a  href="admin_login.php">Log Out</a></li>
            </ul>
        </nav>
        <div class='tournament'>
            <form  method="POST" action="submit_fixtures.php">
            <img src="logo3.png"> 
            <h1>Fixtures Allocation</h1>
            <label for="TournamentName">Select Tournament:</label>
    <select id="tournament_name" name="TournamentName" onchange="getTeamNames(this.value)" required>
    <option value="">Select tournament</option>
      <?php
      $conn = require_once 'db.php'; $conn = $con;
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      
        // Fetch tournament names from registrations table
        $sql = "SELECT TournamentName FROM tournament";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                       while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["TournamentName"] . "'>" . $row["TournamentName"] . "</option>";
            }
        } else {
            echo "<option value=''>No tournaments found</option>";
        }

        $conn->close();
      ?>
    </select>

    <label for="home_team">Home:</label>
    <select id="home_team" name="Home" required>
      <option value="">Select Team</option>
    </select>
    <label for="away_team">Away:</label>
    <select id="away_team" name="Away" required>
      <option value="">Select Team</option>
    </select>
    <label>Match Date</label>
                <input type="date" name="Date">
    <label>TIme</label>
    <input type="time" name="Time">

        <div class='button'>
                <input type="submit" name="" value="Register" class='button1'></div>
                </form>
                <script>
    function getTeamNames(tournament) {
      // Fetch team names based on selected tournament
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("home_team").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "get_team_names.php?tournament=" + tournament, true);
      xhttp.send();

      var xhttpAway = new XMLHttpRequest();
      xhttpAway.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("away_team").innerHTML = this.responseText;
        }
      };
      xhttpAway.open("GET", "get_team_names.php?tournament=" + tournament, true);
      xhttpAway.send();
    }
  </script>
        <!-- Mobile Bottom Nav -->
        <div class="mobile-bottom-nav">
            <a href="admin_dashboard.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Home</span>
            </a>
            <a href="groundregister.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/></svg>
                <span>Ground</span>
            </a>
            <a href="referee_register.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/></svg>
                <span>Referee</span>
            </a>
            <a href="tournament.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/></svg>
                <span>T-ment</span>
            </a>
            <a href="fixtures.php" class="nav-item active">
                <svg viewBox="0 0 24 24"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                <span>Fixtures</span>
            </a>
        </div>
    </body>
</html>
