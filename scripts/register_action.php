<?php 
$email = $_POST["email"];
$name = $_POST["name"];

// include "db.php";
$id = rand(0,999999);
$sql = "INSERT INTO user(id, name, email) VALUES('$name', '$email');";
$result = mysql_query($sql, $link);

if($result == false)
  echo '<a href="register.php">Error: cannot execute query</a>';
else
  header("Location: private.php");

mysql_close($link);
exit;
?>