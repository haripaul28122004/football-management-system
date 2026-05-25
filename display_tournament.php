
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
    <link rel="stylesheet" href="responsive.css">
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
        <div class="table-responsive">
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
        </div>
    </section>
   <br><br>
    <h3 align="center"><a href="tournament_register.php" class="button1" style="display:inline-block; width:auto !important; max-width: 250px; margin: 0 auto; text-decoration:none;">REGISTER NOW</a></h3><br><br>
    <h3 align="center"><a href="user_dashboard.php" style="color: white; text-decoration: underline;">BACK</a></h3>
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