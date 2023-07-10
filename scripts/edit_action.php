<?php
include "database_client.php";

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $db = new MyDB();

  $email = $_POST["email"];
  $name = $_POST["name"];

  $user_id = $_SESSION['user_id'];

  $sql_update_user = <<<EOF
    UPDATE user 
    SET name = "$name", email = "$email"
    WHERE id = $user_id;
    EOF;

  $db->exec($sql_update_user);
  $_SESSION["email"] = $email;
  $_SESSION["name"] = $name;
  $_SESSION["user_id"] = $user_id;
  header("Location: ../account.php");
}
?>