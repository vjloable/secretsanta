<?php
include "database_client.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $db = new MyDB();

  $user_id = $_SESSION['user_id'];

  $sql_pfk = <<<EOF
    PRAGMA FOREIGN_KEYS = ON;
    EOF;

  $sql_delete_user = <<<EOF
    DELETE FROM user
    WHERE id = $user_id;
    EOF;

  $db->exec($sql_pfk);
  $db->exec($sql_delete_user);
  session_destroy();
  header("Location: ../login.php");
}
?>