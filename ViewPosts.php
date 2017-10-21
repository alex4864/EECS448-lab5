<html>
<body>
  <table>

<?php
// create database connection
$mysqli = new mysqli("mysql.eecs.ku.edu", "ashadley", 'P@$$word123', "ashadley");
// check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$get_all_posts_query = "SELECT * FROM Posts;";
$posts = $mysqli->query($get_all_posts_query);

while($post = $posts->fetch_assoc()) {
  $content = $post['content'];
  $user_id = $post['user_id'];
  echo "<tr><td>{$content}</td><td>{$user_id}</td></tr>";
}
?>

  </table>
</body>
</html>
