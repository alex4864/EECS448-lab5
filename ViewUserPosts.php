<html>
<body>
  <h1>View Posts by User</h1>
  <form action="ViewUserPostsBackend.php" method="post">
    Username:
    <select name="username">

<?php
// create database connection
$mysqli = new mysqli("mysql.eecs.ku.edu", "ashadley", 'P@$$word123', "ashadley");
// check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$get_all_users_query = "SELECT * FROM Users;";
$users = $mysqli->query($get_all_users_query);

while($user = $users->fetch_assoc()) {
  $user_id = $user['user_id'];
  echo "<option value={$user_id}>{$user_id}</option>";
}

?>

    </select>

    <input type="submit">
  </form>
</body>
</html>
