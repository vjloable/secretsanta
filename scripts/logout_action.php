<?php
session_start();
session_destroy();
header("Location: /secretsanta/login.php");
?>