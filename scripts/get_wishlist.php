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
$name = $_SESSION['name'];
$room_code = $_SESSION['hosting_room'];

$sql_get_room_members = <<<EOF
SELECT * FROM belongs_in JOIN user
ON user.id = belongs_in.user_id
WHERE room_code = $room_code
EOF;
$members = ($db->query($sql_get_room_members))->fetchArray();
$db->close();
?>