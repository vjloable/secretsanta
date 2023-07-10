<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('secret_santa.db');
    }
}
$db = new MyDB();

$email = $_SESSION['email'];
$sql_get_user_id = <<<EOF
SELECT id FROM user
WHERE email="$email"
EOF;

$user_id = ($db->query($sql_get_user_id))->fetchArray(SQLITE3_ASSOC)["id"];
$_SESSION['user_id'] = $user_id;

$sql_get_rooms = <<<EOF
SELECT room.room_code, state FROM room  
JOIN belongs_in
ON room.room_code = belongs_in.room_code
WHERE belongs_in.user_id = $user_id
EOF;

$rooms = $db->query($sql_get_rooms);

$displayRooms = '';
while ($room = $rooms->fetchArray(SQLITE3_ASSOC)) {
    // var_dump($room);
    $displayRooms .= "<tr><td>" . $room['room_code'] . "</td><td ";
    switch ($room['state']) {
        case 1:
            $displayRooms .= "class=\"text-success\">OPEN</td></tr>";
            break;
        case 2:
            $displayRooms .= "class=\"text-warning\">LOCKED-IN</td></tr>";
            break;
        case 3:
            $displayRooms .= "class=\"text-primary\">REVELATION</td></tr>";
            break;
        default:
            break;
    }
    break;
}

// if ($count < 3) {
//     for ($i = 0; $i < 3; $i++) {
//         $displayRooms .= "<tr><td>test</td><td hidden></td></tr>\n";
//     }
// }

echo $displayRooms;
?>