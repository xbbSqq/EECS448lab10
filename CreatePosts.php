<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  $user = $_POST["userid"];
  $content = $_POST["content"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "mefelsen", "evog9ooY", "mefelsen");

  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  $query = "SELECT user_id FROM users WHERE user_id = '$user'";
  $search = $mysqli->query($query);

  if($search->num_rows > 0) {
    $new_post = "INSERT INTO posts (content, author_id) VALUES ('$content','$user')";
    $valid = $mysqli->query($new_post);
    if($valid === TRUE) {
      echo "Post created!";
    }
    else {
      echo "This is an error.";
    }
  }
  else {
    echo " User does not exist";
  }

  $mysqli->close();
 ?>
