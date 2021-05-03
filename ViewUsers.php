<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli("mysql.eecs.ku.edu", "mefelsen", "evog9ooY", "mefelsen");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT * FROM users";

if($roster = $mysqli->query($query))
{
  echo '<html><head>';
  echo '</head><body>List of Users<br>';

  while($row = $roster->fetch_assoc()) {
    $username = $row["user_id"];
    echo "$username <br>";
  }
}
  echo "</head></html>";

  $mysqli->close();

 ?>
