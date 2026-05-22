
<?php
$conn = mysqli_connect('localhost','root','','fcms');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = " SELECT * FROM tournament";
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
h3 a{
    color:white;
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
            background-color: white;
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
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
        <h1>TOURNAMENTS</h1>
        <br><br>
        <table>
            <tr>
                <th>Tournament Id</th>
                <th>Tournament Name</th>
                <th>Location</th>
                <th>Owner</th>
                <th>Starting Date</th>
                <th>Ending Date</th>
                <th>Phone No</th>
                <th>Type</th>
                <th>Entry Fees</th>
            </tr>
    
            <?php 
            
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>

                <td><?php echo $rows['TID'];?></td>
                <td><?php echo $rows['TournamentName'];?></td>
                <td><?php echo $rows['Location'];?></td>
                <td><?php echo $rows['Owner'];?></td>
                <td><?php echo $rows['StartingDate'];?></td>
                <td><?php echo $rows['EndingDate'];?></td>
                <td><?php echo $rows['PhoneNo'];?></td>
                <td><?php echo $rows['Type'];?></td>
                <td><?php echo $rows['EntryFees'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
   <br><br>
    <h3 align="center"><a  href="tournament_register.php">REGISTER NOW</a></h3><br><br>
    <h3 align="center"><a href="user_dashboard.php">BACK</a></h3>
</body>
 
</html>