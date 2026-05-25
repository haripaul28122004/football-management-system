<?php
// Database connection
$conn=require_once 'db.php'; $conn = $con;
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file is uploaded
if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    // Get file contents
    $photoContent = file_get_contents($_FILES['photo']['tmp_name']);
    
    // Prepare and execute SQL query to store photo in database
    $stmt = $conn->prepare("INSERT INTO images (file) VALUES (?)");
    $stmt->bind_param("b", $photoContent);
    $stmt->execute();
    
    // Close statement
    $stmt->close();
    
    echo "Photo uploaded successfully.";
} else {
    echo "Error uploading photo.";
}

// Close database connection
$conn->close();

