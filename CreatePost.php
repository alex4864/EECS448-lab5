<html>
<body>

<?php
$username = $_POST["username"];
$post = $_POST["post"];

// create database connection
$mysqli = new mysqli("mysql.eecs.ku.edu", "ashadley", 'P@$$word123', "ashadley");
// check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$check_user_exists_query = "SELECT * FROM Users WHERE user_id='" . $username . "';";

$result = $mysqli->query($check_user_exists_query);

if(mysqli_num_rows($result) == 0)
{
  echo "User " . $username . " does not exist.";
}
else
{
  $add_post_query = "INSERT INTO Posts (content, user_id) VALUES ('{$post}','{$username}');";
  if($post_result = $mysqli->query($add_post_query))
  {
    echo "Post successfully created.";
  }
  else
  {
    echo "Error in creating post: " . $mysqli->error . "<br>";
    echo "Attempted query: " . $add_post_query;
  }

}

$mysqli->close();
?>

</body>
</html>
