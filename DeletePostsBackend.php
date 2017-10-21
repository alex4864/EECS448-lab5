<html>
<body>

<?php
$post_ids = $_POST;

// create database connection
$mysqli = new mysqli("mysql.eecs.ku.edu", "ashadley", 'P@$$word123', "ashadley");
// check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

foreach($post_ids as $id => $value) {
  $delete_post_query = "DELETE FROM Posts WHERE post_id='{$id}';";
  $result = $mysqli->query($delete_post_query);

  echo "Post with id {$id} deleted<br>";
}

$mysqli->close();
?>

</body>
</html>
