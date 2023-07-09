<?php
include "database_client.php";
$db = new MyDB();

// $room_code = $_SESSION['room'];
session_start();
$user_id = $_SESSION["user_id"];

function echoWishlist($user, $database) {
    $sql_get_user_wishlist = <<<EOF
        SELECT * FROM wishlist
        WHERE user_id = $user;
        EOF;

    $wishlist = $database->query($sql_get_user_wishlist);

    $wishlistBody = '';
    while ($wish = $wishlist->fetchArray(SQLITE3_ASSOC)) {
        $wishlistBody .= "<tr><td>" . $wish['item'] . "</td><td hidden>:" . $wish['wishlist_id'] . "</td></tr>";
    }

    if ($wishlistBody == '') {
        $wishlistBody .= "<tr><td>&nbsp</td><td hidden></td></tr>
        \n<tr><td>&nbsp</td><td hidden></td></tr>
        \n<tr><td>&nbsp</td><td hidden></td></tr>
        \n<tr><td>&nbsp</td><td hidden></td></tr>
        \n<tr><td>&nbsp</td><td hidden></td></tr>";
    }

    echo $wishlistBody;
    $database->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['inputWish'])) {
        $wish_id = rand(0, 99999999);

        $sql_room_code_exists = <<<EOF
        SELECT * FROM room WHERE room_code="$room_code";
        EOF;

        do {
            $ret = $db->query($sql_room_code_exists);
            if ($ret->fetchArray(SQLITE3_ASSOC)) {
                $code = rand(0, 99999999);
                $room_code = str_pad($code, 4, "0", STR_PAD_LEFT);
            } else {
                break;
            }
        } while ($ret->fetchArray(SQLITE3_ASSOC));

        $sql_host_a_room = <<<EOF
        INSERT INTO room(room_code, host_id) VALUES("$room_code", $user_id);
        EOF;
    } elseif (isset($_POST['deleteWishes'])) {
        $deleteWishes = $_POST['deleteWishes'];

        foreach ($deleteWishes as $deleteWish) {
            # code...
        }
        echo echoWishlist($user_id, $db);   
    } elseif (isset($_POST['load'])) {
        echo echoWishlist($user_id, $db);        
    }
}
?>

                                