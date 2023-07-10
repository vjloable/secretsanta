<?php
include "database_client.php";
$db = new MyDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $room_code = $_SESSION['room'];
    
    $sql_pfk = <<<EOF
        PRAGMA FOREIGN_KEYS = ON;
        EOF;

    $sql_end_room = <<<EOF
        DELETE FROM room
        WHERE room_code = "$room_code";
        EOF;

    // echo $room_code;
    $db->exec($sql_pfk);
    $db->exec($sql_end_room);
    // exit();
    unset($_SESSION['room_state']);
    unset($_SESSION['room']);
    unset($_SESSION['host']);
    unset($_SESSION['user_id']);
    unset($_SESSION['host_id']);
    unset($_SESSION['draw_id']);
    exit();
}
?>