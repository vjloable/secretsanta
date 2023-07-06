<?php
include "database_client.php";
$db = new MyDB();

session_start();
$email = $_SESSION['email'];
$name =  $_SESSION['name'];

$sql_get_user_id = <<<EOF
SELECT id FROM user
WHERE name="$name"
EOF;

$user_id = ($db->query($sql_get_user_id))->fetchArray(SQLITE3_ASSOC)["id"];
$_SESSION['user_id'] = $user_id;

$sql_are_you_a_host = <<<EOF
SELECT * FROM room LEFT JOIN user 
ON user.id = room.host_id
WHERE email = "$email"
EOF;

$ret = $db->query($sql_are_you_a_host);
if ($data = $ret->fetchArray(SQLITE3_ASSOC)) {
    $_SESSION['hosting_room'] = $data["room_code"];
    header("Location: /secretsanta/join_1.php");
    exit();
}

$room_code = rand(0, 9999);

$sql_room_code_exists = <<<EOF
SELECT * FROM room WHERE room_code="$room_code";
EOF;

do {
    $ret = $db->query($sql_room_code_exists);
    if ($ret->fetchArray(SQLITE3_ASSOC)) {
        $room_code = rand(0, 9999);
    } else {
        break;
    }
} while ($ret->fetchArray(SQLITE3_ASSOC));

$sql_host_a_room = <<<EOF
INSERT INTO room(room_code, host_id) VALUES($room_code, $user_id);
EOF;

$sql_join_a_room = <<<EOF
INSERT INTO belongs_in(user_id, room_code) VALUES($user_id, $room_code);
EOF;

$db->exec($sql_host_a_room);
$db->exec($sql_join_a_room);
$db->close();

$_SESSION['hosting_room'] = $room_code;
header("Location: /secretsanta/join_1.php");
exit();
?>