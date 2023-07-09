<?php
include "database_client.php";
$db = new MyDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];

    $sql_get_user_id = <<<EOF
    SELECT id FROM user
    WHERE name="$name"
    EOF;

    $user_id = ($db->query($sql_get_user_id))->fetchArray(SQLITE3_ASSOC)["id"];

    $_SESSION['user_id'] = $user_id;

    $a = $_POST['roomcode_a'];
    $b = $_POST['roomcode_b'];
    $c = $_POST['roomcode_c'];
    $d = $_POST['roomcode_d'];
    $room_code = $a.$b.$c.$d;

    // echo $room_code;

    $sql_room_exists = <<<EOF
    SELECT * FROM room 
    WHERE room_code = "$room_code";
    EOF;

    if (!$data = ($db->query($sql_room_exists))->fetchArray(SQLITE3_ASSOC)) {
        var_dump($data);
        $db->close();
        $error_msg = "Entered an invalid room code.";
        header("Location: /secretsanta/lobby.php" . "/?error_msg=" . $error_msg);
        exit();
    }

    $sql_joined_the_room = <<<EOF
    SELECT user_id, room.room_code, host_id, name, email FROM belongs_in 
    JOIN room
    ON belongs_in.room_code = room.room_code
    JOIN user
    ON user.id = room.host_id
    WHERE user_id = $user_id AND belongs_in.room_code = "$room_code";
    EOF;

    $data = ($db->query($sql_joined_the_room))->fetchArray(SQLITE3_ASSOC);

    if ($data) {
        $_SESSION['room'] = $room_code;
        $_SESSION['host'] = $data['name'];
        $_SESSION['host_id'] = $data['host_id'];
        $db->close();
        header("Location: /secretsanta/join_1.php");
        exit();
    }

    $sql_join_a_room = <<<EOF
    INSERT INTO belongs_in(user_id, room_code) VALUES($user_id, "$room_code");
    EOF;

    $db->exec($sql_join_a_room);

    $sql_get_host = <<<EOF
    SELECT * FROM user 
    JOIN room
    ON user.id = room.host_id
    WHERE room.room_code = "$room_code";
    EOF;

    $host = ($db->query($sql_get_host))->fetchArray(SQLITE3_ASSOC);

    $_SESSION['room'] = $room_code;
    $_SESSION['host'] = $host['name'];
    $_SESSION['host_id'] = $host['host_id'];
    $db->close();

    header("Location: /secretsanta/join_1.php");
    exit();
}
?>