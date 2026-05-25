<?php
require 'db.php';
$conn = $con;

$sql = " SELECT * FROM fixtures";
$result = $conn->query($sql);
$fixtures = [];
if ($result) {
    while($row = $result->fetch_assoc()) {
        $fixtures[] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Tournament Details</title>

    <style>
    body {
        background-color: var(--secondary-bg) !important;
        margin: 0;
        font-family: 'Outfit', sans-serif !important;
    }
    h1 {
        text-align: center;
        color: white;
        font-size: xx-large;
        font-weight: 800 !important;
        margin-top: 30px;
        letter-spacing: 0.5px;
    }
    .mobile-card-list { display: none; padding: 15px; }
    @media (max-width: 768px) {
        .table-responsive { display: none; }
        .mobile-card-list { display: block; }
    }
    .mobile-data-card { background: #fff; border-radius: 12px; padding: 15px; margin-bottom: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    .card-top-row { display: flex; justify-content: space-between; margin-bottom: 10px; }
    .card-category-badge { background: #e2e8f0; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: 600; }
    .match-card-vs { display: flex; align-items: center; justify-content: space-between; margin: 15px 0; }
    .match-team { flex: 1; text-align: center; font-weight: 700; }
    .match-vs-circle { background: #1b9bff; color: white; width: 35px; height: 35px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 800; margin: 0 10px; }
    .match-card-meta { display: flex; justify-content: space-between; font-size: 12px; color: #64748b; border-top: 1px solid #eee; padding-top: 10px; }
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
    <section>
        <h1>FIXTURES</h1>
         <br><br>
        <div class="table-responsive">
        <table>
            <tr>
                <th>Match No</th>
                <th>Tournament Name</th>
                <th>Home Team</th>
                <th>Away Team</th>
                <th>Match Date</th>
                <th>Time</th>
            </tr>
    
            <?php foreach ($fixtures as $f): ?>
            <tr>
                <td><?php echo htmlspecialchars($f['FixturesID']);?></td>
                <td><?php echo htmlspecialchars($f['TournamentName']);?></td>
                <td><?php echo htmlspecialchars($f['Home']);?></td>
                <td><?php echo htmlspecialchars($f['Away']);?></td>
                <td><?php echo htmlspecialchars($f['Date']);?></td>
                <td><?php echo htmlspecialchars($f['Time']);?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>

        <!-- Mobile Alternative Match Card List -->
        <div class="mobile-card-list">
            <?php if (!empty($fixtures)): ?>
                <?php foreach ($fixtures as $f): ?>
                    <div class="mobile-data-card">
                        <div class="card-top-row">
                            <span class="card-category-badge"><?php echo htmlspecialchars($f['TournamentName']); ?></span>
                            <span style="font-size: 12px; font-weight: 700; color: #1b9bff;">Match #<?php echo htmlspecialchars($f['FixturesID']); ?></span>
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
                <div style="text-align: center; color: #64748b; font-size: 14px; padding: 20px;">No fixtures scheduled.</div>
            <?php endif; ?>
        </div>
    </section>
        <!-- Mobile Bottom Nav -->
        <div class="mobile-bottom-nav">
            <a href="user_dashboard.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Home</span>
            </a>
            <a href="display_tournament.php" class="nav-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/></svg>
                <span>T-ment</span>
            </a>
            <a href="display_fixtures.php" class="nav-item active">
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