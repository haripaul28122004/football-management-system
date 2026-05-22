
<?php
$conn = mysqli_connect('localhost','root','','fcms');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = " SELECT * FROM fixtures";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Tournament Details</title>

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
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: white;
            font-size: xx-large;
            font-family: 'agency fb';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color: white;
        }
 
        td {
            font-weight: lighter;
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
    <section>
        <h1>FIXTURES</h1>
         <br><br>
        <table>
            <tr>
                <th>Match No</th>
                <th>Tournament Name</th>
                <th>Home Team</th>
                <th>Away Team</th>
                <th>Match Date</th>
                <th>Time</th>
            </tr>
    
            <?php 
            
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>

                <td><?php echo $rows['FixturesID'];?></td>
                <td><?php echo $rows['TournamentName'];?></td>
                <td><?php echo $rows['Home'];?></td>
                <td><?php echo $rows['Away'];?></td>
                <td><?php echo $rows['Date'];?></td>
                <td><?php echo $rows['Time'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>