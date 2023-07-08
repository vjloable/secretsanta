<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('secret_santa.db');
    }
}
$db = new MyDB();

$room_code = $_SESSION['room'];

$sql_get_room_members = <<<EOF
SELECT name FROM belongs_in JOIN user
ON user.id = belongs_in.user_id
WHERE room_code = $room_code
ORDER BY name
EOF;
$members = $db->query($sql_get_room_members);
?>