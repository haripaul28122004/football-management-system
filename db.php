<?php
mysqli_report(MYSQLI_REPORT_OFF);

try {
    $con = @new mysqli(
        getenv('DB_HOST') ?: 'localhost',
        getenv('DB_USER') ?: 'root',
        getenv('DB_PASSWORD') ?: '',
        getenv('DB_NAME') ?: 'fcms',
        getenv('DB_PORT') ?: '3306'
    );

    if ($con->connect_error) {
        throw new Exception($con->connect_error);
    }
} catch (Exception $e) {
    die("Database Connection failed! Please make sure your environment variables (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) are properly configured on Render. Error: " . $e->getMessage());
}
?>
