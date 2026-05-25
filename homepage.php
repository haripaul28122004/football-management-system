<?php
require_once 'db.php';
$tournaments = [];
$players = [];
if ($con) {
    $res1 = mysqli_query($con, "SELECT * FROM tournament ORDER BY TID DESC LIMIT 2");
    if ($res1) {
        while ($r = mysqli_fetch_assoc($res1)) {
            $tournaments[] = $r;
        }
    }
    $res2 = mysqli_query($con, "SELECT * FROM playerdetails ORDER BY ID DESC LIMIT 2");
    if ($res2) {
        while ($r = mysqli_fetch_assoc($res2)) {
            $players[] = $r;
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration form</title>
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
transition: transform 2.5s;
}
nav img:hover {
    transform: perspective(500px) rotateY(360deg);
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
.landingpage
{
    background-image: url('ch.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: 110% ;
    display: flex;
    justify-content: space-around;
    padding: 40px;
    height: 600px;
}
.content_1{
    font-family: sans-serif;
    justify-content: left;
    align-items: left;
    width: 50%;
    text-align: left;

}
.text_1
{
    justify-content: left;
    font-size: xx-large;
    font-weight: bolder;
    color:white;
    text-shadow: 5px 5px blue;
    align-items: left;
    text-align: left;  
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

        <div class="landingpage">
            <div class="content_1">
                <div class="text_1">
                    Welcome to the <br> Football Management <br> System
                </div>
            </div>
        </div>

        <!-- Sticky Mobile Search Bar -->
        <div class="mobile-search-bar">
            <div class="mobile-search-inner">
                <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                <input type="text" placeholder="Search tournaments, fixtures or players..." class="mobile-search-input" id="mobileSearch">
            </div>
        </div>

        <!-- Horizontal Categories Slider -->
        <div class="mobile-categories-slider">
            <a href="display_tournament.php" class="category-item">
                <div class="category-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H4v2h16v-2h-5c-.55 0-1-.45-1-1v-2.34"/><path d="M12 2a6 6 0 0 1 6 6v3.5c0 1.66-2 3.5-6 3.5s-6-1.84-6-3.5V8a6 6 0 0 1 6-6z"/></svg>
                </div>
                <div class="category-label">Tournaments</div>
            </a>
            <a href="display_fixtures.php" class="category-item">
                <div class="category-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                </div>
                <div class="category-label">Fixtures</div>
            </a>
            <a href="userplayerview.php" class="category-item">
                <div class="category-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div class="category-label">Players</div>
            </a>
            <a href="gallery.php" class="category-item">
                <div class="category-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
                <div class="category-label">Gallery</div>
            </a>
            <a href="about.php" class="category-item">
                <div class="category-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                </div>
                <div class="category-label">About Us</div>
            </a>
        </div>

        <!-- Featured Banner Card -->
        <div class="mobile-banner-carousel">
            <div class="featured-banner-card">
                <div class="banner-badge">Hot Fixture</div>
                <div class="banner-title">Murph's Chennai Cup</div>
                <div class="banner-desc">Live league matches starting this Friday! Witness the clash of local titans.</div>
            </div>
        </div>

        <!-- Live Featured Cards Section -->
        <div class="mobile-featured-live">
            <!-- Featured Tournaments -->
            <div class="section-header-modern">
                <h2>Featured Tournaments</h2>
                <a href="display_tournament.php" class="view-all">View All</a>
            </div>
            
            <div class="home-card-grid">
                <?php if (!empty($tournaments)): ?>
                    <?php foreach ($tournaments as $t): ?>
                        <div class="mobile-data-card" style="margin-bottom: 0;">
                            <div class="card-top-row">
                                <span class="card-category-badge"><?php echo htmlspecialchars($t['Type']); ?></span>
                                <span style="font-size: 12px; font-weight: 700; color: #10b981;">₹<?php echo htmlspecialchars($t['EntryFees']); ?></span>
                            </div>
                            <div class="card-title-main"><?php echo htmlspecialchars($t['TournamentName']); ?></div>
                            <div class="card-info-grid">
                                <div class="info-grid-item">
                                    <span class="info-grid-lbl">Location</span>
                                    <span class="info-grid-val"><?php echo htmlspecialchars($t['Location']); ?></span>
                                </div>
                                <div class="info-grid-item">
                                    <span class="info-grid-lbl">Starts On</span>
                                    <span class="info-grid-val"><?php echo htmlspecialchars($t['StartingDate']); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div style="text-align: center; color: #64748b; font-size: 13px; padding: 10px;">No featured tournaments found.</div>
                <?php endif; ?>
            </div>

            <!-- Featured Players -->
            <div class="section-header-modern">
                <h2>Top Players</h2>
                <a href="userplayerview.php" class="view-all">View All</a>
            </div>

            <div class="player-grid-container" style="margin-top: 0; padding-top: 0;">
                <?php if (!empty($players)): ?>
                    <?php foreach ($players as $p): ?>
                        <div class="player-card-modern" style="margin-bottom: 0;">
                            <div class="player-image-wrap">
                                <?php 
                                    $imgSrc = !empty($p['image']) && file_exists('img/' . $p['image']) ? 'img/' . $p['image'] : 'giff.gif'; 
                                ?>
                                <img src="<?php echo $imgSrc; ?>" alt="<?php echo htmlspecialchars($p['Name']); ?>">
                                <span class="player-badge"><?php echo htmlspecialchars($p['position']); ?></span>
                            </div>
                            <div class="player-details-wrap">
                                <div class="player-name-modern"><?php echo htmlspecialchars($p['Name']); ?></div>
                                <div class="player-stats-row">
                                    <div class="player-stat-item">
                                        <div class="stat-val"><?php echo htmlspecialchars($p['matches']); ?></div>
                                        <div class="stat-lbl">Matches</div>
                                    </div>
                                    <div class="player-stat-item">
                                        <div class="stat-val"><?php echo htmlspecialchars($p['goals']); ?></div>
                                        <div class="stat-lbl">Goals</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div style="text-align: center; color: #64748b; font-size: 13px; padding: 10px; grid-column: span 2;">No featured players found.</div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Mobile Bottom Nav -->
        <div class="mobile-bottom-nav">
            <a href="homepage.php" class="nav-item active">
                <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Home</span>
            </a>
            <a href="userplayerview.php" class="nav-item">
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

