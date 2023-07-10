<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('secret_santa.db');
    }
}

function getDraw($draw_id): array
{
    $db = new MyDB();
    $sql_get_draw = <<<EOF
    SELECT 
    s.draw_id AS "draw_id",
    s.santa_id AS "my_id",
    s.recipient_id AS "recipient_id",
    x.name AS "recipient",
    r.santa_id AS "santa_id",
    y.name AS "santa",
    s.in_room_code AS "room_code"
    FROM draw s
    JOIN draw r
    ON s.santa_id = r.recipient_id
    JOIN user x
    ON s.recipient_id = x.id
    JOIN user y 
    ON r.santa_id = y.id
    WHERE s.draw_id = $draw_id
    EOF;

    $data = ($db->query($sql_get_draw))->fetchArray(SQLITE3_ASSOC);
    $value = [$data['recipient'],$data['santa']];
    $db->close();
    return $value;
}
?>