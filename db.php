<?php
$con = mysqli_connect(
    getenv('DB_HOST') ?: 'localhost',
    getenv('DB_USER') ?: 'root',
    getenv('DB_PASSWORD') ?: '',
    getenv('DB_NAME') ?: 'fcms',
    getenv('DB_PORT') ?: '3306'
);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
