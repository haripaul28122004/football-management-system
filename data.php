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
                <td>Image</td>
            </tr>
            <?php
            $i=1;
            $rows=mysqli_query($con, "SELECT * FROM images ORDER BY id DESC");
            ?>
            <?php foreach($rows as $row): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><img src="img/<?php echo $row['image']; ?>" width=200 height=200></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="samplee.php">Back</a>
    </body>
</html>