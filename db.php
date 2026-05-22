<?php
   $con=mysqli_connect("localhost","root","","fcms");
  if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
