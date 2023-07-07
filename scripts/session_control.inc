<?php
  session_start();

  if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "VERIFIED")) {
    header("Location: secretsanta/login.php");
    exit;
}
?>