<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "mefelsen", "evog9ooY", "mefelsen");
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$username = $_POST["user"];
echo '<html><head></head>';
echo "<body><br>";
echo $username;
echo "<br><br>";
$query = "SELECT * FROM posts WHERE author_id='$username'";
if ($roster = $mysqli->query($query)) {

  while ($row = $roster->fetch_assoc()) {
    $post_id = $row["post_id"];
    $content = $row["content"];
    echo "Post_id: " . $post_id . "<br>";
    echo "Content: " . $content . "<br><br><br>";
  }
  $roster->free();
  echo "</body></html>";
}
$mysqli->close();
?>
