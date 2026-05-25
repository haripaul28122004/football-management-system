<?php
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h2 {
  font-family: 'Outfit', 'Montserrat', sans-serif !important;
  color: #ffffff !important;
  text-align: center !important;
  font-weight: 800 !important;
  font-size: 32px !important;
  margin-top: 35px !important;
  margin-bottom: 25px !important;
  text-transform: uppercase !important;
  letter-spacing: 1px !important;
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
                <li><a href="homepage.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="userplayerview.php">Players</a></li>
                <li><a  href="gallery.php">Gallery</a></li>
                <li><a  href="contact.php">Contact Us</a></li>
                <li><a  href="user_login.php">Log In</a></li>
                <li><a  href="admin_login.php">Admin</a></li>
            </ul>
        </nav>
        <br><br>
        <h2>Our Players</h2>
        <br><br>
<div class="player-grid-container">
    <?php
    $rows = mysqli_query($con, "SELECT * FROM playerdetails ORDER BY id DESC");
    foreach ($rows as $row): 
        $imageFile = 'img/' . $row['image'];
        if (!empty($row['image']) && file_exists($imageFile)) {
            $imageSrc = $imageFile;
        } else {
            $imageSrc = 'giff.gif';
        }
    ?>
        <div class="player-card-modern">
            <div class="player-image-wrap">
                <img src="<?php echo $imageSrc; ?>" alt="<?php echo htmlspecialchars($row['Name']); ?>">
                <span class="player-badge"><?php echo htmlspecialchars($row['position']); ?></span>
            </div>
            <div class="player-details-wrap">
                <div class="player-name-modern"><?php echo htmlspecialchars($row['Name']); ?></div>
                <div class="player-stats-row">
                    <div class="player-stat-item">
                        <div class="stat-val"><?php echo htmlspecialchars($row['matches']); ?></div>
                        <div class="stat-lbl">Matches</div>
                    </div>
                    <div class="player-stat-item">
                        <div class="stat-val"><?php echo htmlspecialchars($row['goals']); ?></div>
                        <div class="stat-lbl">Goals</div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
        <!-- Mobile Bottom Nav -->
        <div class="mobile-bottom-nav">
            <a href="homepage.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Home</span>
            </a>
            <a href="userplayerview.php" class="nav-item active">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                <span>Players</span>
            </a>
            <a href="gallery.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c0 1.1.9-2 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                <span>Gallery</span>
            </a>
            <a href="user_login.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M11 7L9.6 8.4l3.6 3.6H2v2h11.2L9.6 17.6 11 19l6-6-6-6zm7-4h-8c-1.1 0-2 .9-2 2v4h2V5h8v14h-8v-4h-2v4c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
                <span>Login</span>
            </a>
        </div>
</body>
</html>
