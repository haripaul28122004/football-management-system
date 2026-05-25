<?php
require_once 'db.php';
$tournaments = [];
$fixtures = [];
if ($con) {
    $res1 = mysqli_query($con, "SELECT * FROM tournament ORDER BY TID DESC LIMIT 2");
    if ($res1) {
        while ($r = mysqli_fetch_assoc($res1)) {
            $tournaments[] = $r;
        }
    }
    $res2 = mysqli_query($con, "SELECT * FROM fixtures ORDER BY FixturesID DESC LIMIT 2");
    if ($res2) {
        while ($r = mysqli_fetch_assoc($res2)) {
            $fixtures[] = $r;
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Dashboard</title>
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
    background: darkblue;
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
    color: white;
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
    background-image: url('ev1.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover ;
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
                        <li><a href="user_dashboard.php">Home</a></li>
                        <li><a href="display_tournament.php">Tournament</a></li>
                        <li><a href="display_fixtures.php">Fixtures</a></li>
                        <li><a  href="user_login.php">Log Out</a></li>
            </ul>
        </nav>

        <!-- Greeting Header Card -->
        <div class="mobile-banner-carousel" style="padding-top: 15px;">
            <div class="featured-banner-card" style="background: linear-gradient(135deg, #1b9bff, #0056b3);">
                <div class="banner-badge" style="background: #10b981;">User Dashboard</div>
                <div class="banner-title" style="font-size: 20px;">Welcome Back, Athlete!</div>
                <div class="banner-desc">Ready to dominate the field? Register your team or explore ongoing tournaments below.</div>
            </div>
        </div>

        <!-- Quick Action Cards Grid -->
        <div class="dashboard-actions-grid">
            <a href="teamregistration.php" class="action-card-modern">
                <div class="action-card-icon emerald">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div class="action-card-title">Register Team</div>
            </a>
            <a href="display_tournament.php" class="action-card-modern">
                <div class="action-card-icon blue">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H4v2h16v-2h-5c-.55 0-1-.45-1-1v-2.34"/><path d="M12 2a6 6 0 0 1 6 6v3.5c0 1.66-2 3.5-6 3.5s-6-1.84-6-3.5V8a6 6 0 0 1 6-6z"/></svg>
                </div>
                <div class="action-card-title">Tournaments</div>
            </a>
            <a href="display_fixtures.php" class="action-card-modern">
                <div class="action-card-icon amber">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                </div>
                <div class="action-card-title">Fixtures</div>
            </a>
        </div>

        <!-- Ongoing Tournaments Section -->
        <div class="section-header-modern">
            <h2>Ongoing Tournaments</h2>
            <a href="display_tournament.php" class="view-all">View All</a>
        </div>
        <div class="mobile-card-list">
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
                                <span class="info-grid-lbl">Ends On</span>
                                <span class="info-grid-val"><?php echo htmlspecialchars($t['EndingDate']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="text-align: center; color: #64748b; font-size: 13px; padding: 10px;">No tournaments found.</div>
            <?php endif; ?>
        </div>

        <!-- Upcoming Fixtures Section -->
        <div class="section-header-modern">
            <h2>Upcoming Fixtures</h2>
            <a href="display_fixtures.php" class="view-all">View All</a>
        </div>
        <div class="mobile-card-list">
            <?php if (!empty($fixtures)): ?>
                <?php foreach ($fixtures as $f): ?>
                    <div class="mobile-data-card" style="margin-bottom: 0;">
                        <div class="card-top-row">
                            <span class="card-category-badge"><?php echo htmlspecialchars($f['TournamentName']); ?></span>
                            <span style="font-size: 12px; font-weight: 700; color: #3b82f6;">Fixture #<?php echo htmlspecialchars($f['FixturesID']); ?></span>
                        </div>
                        
                        <div class="match-card-vs">
                            <div class="match-team">
                                <div class="match-team-name"><?php echo htmlspecialchars($f['Home']); ?></div>
                            </div>
                            <div class="match-vs-circle">VS</div>
                            <div class="match-team">
                                <div class="match-team-name"><?php echo htmlspecialchars($f['Away']); ?></div>
                            </div>
                        </div>
                        
                        <div class="match-card-meta">
                            <span>Date: <?php echo htmlspecialchars($f['Date']); ?></span>
                            <span>Time: <?php echo htmlspecialchars($f['Time']); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="text-align: center; color: #64748b; font-size: 13px; padding: 10px;">No upcoming fixtures found.</div>
            <?php endif; ?>
        </div>

        <div class="landingpage">
            <div class="content_1">
                <div class="text_1">
                    Welcome Back, Athlete! <br> Your Dashboard
                </div>
            </div>
        </div>
        <!-- Mobile Bottom Nav -->
        <div class="mobile-bottom-nav">
            <a href="user_dashboard.php" class="nav-item active">
                <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Home</span>
            </a>
            <a href="display_tournament.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/></svg>
                <span>T-ment</span>
            </a>
            <a href="display_fixtures.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                <span>Fixtures</span>
            </a>
            <a href="user_login.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
                <span>Logout</span>
            </a>
        </div>
    </body>
</html>


