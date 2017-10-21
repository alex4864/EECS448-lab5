<html>
<body>
  <form action="DeletePostsBackend.php" method="post">
    <table>
      <tr><td><b>Post</b></td><td><b>User</b></td><td><b>Delete?</b></td></tr>

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
  $post_id = $post['post_id'];
  $content = $post['content'];
  $user_id = $post['user_id'];
  echo "<tr><td>{$content}</td><td>{$user_id}</td><td><input type=\"checkbox\" name={$post_id}></input></td></tr>";
}
?>

    </table>
    <input type="submit">
  </action>
</body>
</html>
