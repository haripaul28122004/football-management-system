<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tournament Registration</title>
</head>
<body>
  <h2>Tournament Registration</h2>
  <form action="submit_team_registration.php" method="post">
    <label for="TournamentName">Select Tournament:</label>
    <select id="tournament_name" name="TournamentName" onchange="getTeamNames(this.value)" required>
      <?php
      $conn = mysqli_connect('localhost','root','','fcms');
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      
        // Fetch tournament names from registrations table
        $sql = "SELECT TournamentName FROM tournament";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                       while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["TournamentName"] . "'>" . $row["TournamentName"] . "</option>";
            }
        } else {
            echo "<option value=''>No tournaments found</option>";
        }

        $conn->close();
      ?>
    </select>

    <label for="TeamName">Select Team:</label>
    <select id="TeamName" name="TeamName" required>
      <option value="">Select Team</option>
    </select>

    <input type="submit" value="Submit">
  </form>

  <script>
    function getTeamNames(tournament) {
      // Fetch team names based on selected tournament
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("TeamName").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "get_team_names.php?tournament=" + tournament, true);
      xhttp.send();
    }
  </script>
</body>
</html>