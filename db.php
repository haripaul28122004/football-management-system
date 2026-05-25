<?php
$con = @new mysqli(
    getenv('DB_HOST') ?: 'localhost',
    getenv('DB_USER') ?: 'root',
    getenv('DB_PASSWORD') ?: '',
    getenv('DB_NAME') ?: 'fcms',
    getenv('DB_PORT') ?: '3306'
);

if ($con->connect_error) {
    die("Database Connection failed! Please make sure your environment variables (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) are properly configured on Render. Error: " . $con->connect_error);
}
?>
