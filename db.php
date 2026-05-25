<?php
mysqli_report(MYSQLI_REPORT_OFF);

try {
    $con = @new mysqli(
        "sql12.freesqldatabase.com",
        "sql12828195",
        "j6yHuXEcHN",
        "sql12828195",
        3306
    );

    if ($con->connect_error) {
        throw new Exception($con->connect_error);
    }
} catch (Exception $e) {
    die("Database Connection failed! Error: " . $e->getMessage());
}
?>