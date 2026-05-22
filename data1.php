<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Data</title>
    </head>
    <body>
        <table border=1 cellspacing=0 cellpadding=10>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>DOB</td>
                <td>Matches Played</td>
                <td>Goals Scored</td>
                <td>Image</td>
            </tr>
            <?php
            $i=1;
            $rows=mysqli_query($con, "SELECT * FROM playerdetails ORDER BY id DESC");
            ?>
            <?php foreach($rows as $row): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["DOB"]; ?></td>
                <td><?php echo $row["matches"]; ?></td>
                <td><?php echo $row["goals"]; ?></td>
                <td><img src="img/<?php echo $row['image']; ?>" width=200 height=200></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="playerdetails.php">Back</a>
    </body>
</html>