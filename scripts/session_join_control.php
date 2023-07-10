<?php
session_start();
if (isset($_SESSION["room_state"]) && $_SESSION["room_state"] == 1) {
    header("Location: /secretsanta/join_1.php");
    exit;
} elseif (isset($_SESSION["room_state"]) && $_SESSION["room_state"] == 2) {
    header("Location: /secretsanta/join_2.php");
    exit;
} elseif (isset($_SESSION["room_state"]) && $_SESSION["room_state"] == 3) {
    header("Location: /secretsanta/join_3.php");
    exit;
} else {
    header("Location: /secretsanta/lobby.php");
    exit;
}
?>