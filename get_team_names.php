<?php
// Establish connection to the database
$conn = require_once 'db.php'; $conn = $con;

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the 'tournament' parameter is set and not empty
if(isset($_GET['tournament']) && !empty($_GET['tournament'])) {
    // Sanitize the input to prevent SQL injection
    $tournament = mysqli_real_escape_string($conn, $_GET['tournament']);

    // Fetch team names based on the selected tournament
    $sql = "SELECT TeamName FROM registered_teams WHERE TournamentName = '$tournament'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Start building the HTML options
        $options = "<option value=''>Select Team</option>";
        
        // Fetch team names and append them to options
        while($row = mysqli_fetch_assoc($result)) {
            $options .= "<option value='" . $row['TeamName'] . "'>" . $row['TeamName'] . "</option>";
        }

        // Echo the options back to the client-side JavaScript
        echo $options;
    } else {
        // If no teams found for the selected tournament
        echo "<option value=''>No teams found</option>";
    }
} else {
    // If the 'tournament' parameter is not set or empty
    echo "<option value=''>Invalid input</option>";
}

// Close the database connection
mysqli_close($conn);
?>
