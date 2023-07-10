<?php
include "database_client.php";
$db = new MyDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $room_code = $_SESSION['room'];

    $sql_next_state = <<<EOF
        UPDATE room
        SET state = 3
        WHERE room_code = "$room_code";
        EOF;

    $db->exec($sql_next_state);
    $_SESSION["room_state"] = 3;
    exit();
}
?>