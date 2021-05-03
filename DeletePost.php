<?php
$post_list = $_POST["postForm"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "mefelsen", "evog9ooY", "mefelsen");

if(!empty($post_list)) {
  $j = count($post_list);
  echo "deleted " . $j . " post(s)<br>";
  for($i = 0; $i < $N; $i++)
  {
    $query = "DELETE FROM posts WHERE post_id = '" . $post_list[$i] . "'";
    if ($result = $mysqli->query($query)) {
      echo $post_list[$i] . "<br>";
    } else {
      echo "Error deleting post:  " . $post_list[$i] . "<br>";
    }
  }
}
$mysqli->close();
?>
