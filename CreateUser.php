<html>
<body>

<?php
$username = $_POST["username"];

// create database connection
$mysqli = new mysqli("mysql.eecs.ku.edu", "ashadley", 'P@$$word123', "ashadley");
// check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$check_user_exists_query = "SELECT * FROM Users WHERE user_id='" . $username . "';";

$result = $mysqli->query($check_user_exists_query);

if(mysqli_num_rows($result) > 0)
{
  echo "Username already in use, pick another.";
}
else
{
  $add_user_query = "INSERT INTO Users (user_id) VALUES ('" . $username . "');";
  if($user_result = $mysqli->query($add_user_query))
  {
    echo "User successfully created.";
  }
  else
  {
    echo "Error in creating user: " . $mysqli->error;
  }

}

$mysqli->close();
?>

</body>
</html>
