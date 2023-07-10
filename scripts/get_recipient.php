<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('secret_santa.db');
    }
}

function getRecipient($user_id, $room_code) : array | bool{
    $db = new MyDB();
    $sql_get_room_members = <<<EOF
    SELECT * FROM draw JOIN user
    ON draw.recipient_id = user.id
    WHERE in_room_code = "$room_code"
    AND draw.santa_id = $user_id;
    EOF;
    
    $data = ($db->query($sql_get_room_members))->fetchArray(SQLITE3_ASSOC);
    $db->close();
    return $data;
}

function getRecipientWishlist($santa_id, $room_code): string
{
    $db = new MyDB();
    $sql_get_recipient_wishlist = <<<EOF
    SELECT item FROM draw 
    JOIN user
    ON draw.recipient_id = user.id
    JOIN wishlist
    ON wishlist.user_id = draw.recipient_id 
    WHERE in_room_code = "$room_code"
    AND draw.santa_id = $santa_id;
    EOF;

    $query = $db->query($sql_get_recipient_wishlist);

    $wishlistBody = "";
    $count = 0;
    // var_dump($data);
    while ($data = $query->fetchArray(SQLITE3_ASSOC)) {
        $wishlistBody .= "<tr><td>" . $data['item'] . "</td></tr>";
        $count++;
    }

    if ($count < 3) {
        for ($i = 0; $i < (3 - $count); $i++) {
            $wishlistBody .= "<tr><td>&nbsp</td></tr>\n";
        }
    }

    $db->close();
    return $wishlistBody;
}
?>