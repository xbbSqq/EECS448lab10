<?php
  $user = $_POST["userid"];

  $mysqli = new mysqli("mysql.eecs.ku.edu", "mefelsen", "evog9ooY", "mefelsen");

  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  $query = "INSERT INTO users (user_id) VALUES ('" . $user . "')";
  if($mysqli->query($query) === TRUE) {
    echo "User created! Your user id is " . $user . "!";
  }
  else if($query === ""){
   echo "Enter a valid user id";
  }
  else {
    echo "This user already exists. Do it again.";
  }

  $mysqli->close();
 ?>
