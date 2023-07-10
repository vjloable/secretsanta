<?php
include "database_client.php";
$db = new MyDB();

session_start();
$user_id = $_SESSION["user_id"];
$room_code = $_SESSION['room'];



function echoWishlist($user, $room_code, $database) {
    $sql_get_user_wishlist = <<<EOF
        SELECT * FROM wishlist
        WHERE user_id = $user
        AND room_id = "$room_code";
        EOF;

    $wishlist = $database->query($sql_get_user_wishlist);

    $wishlistBody = '';
    $count = 0;
    while ($wish = $wishlist->fetchArray(SQLITE3_ASSOC)) {
        $wishlistBody .= "<tr><td>" . $wish['item'] . "</td><td hidden>:" . $wish['wishlist_id'] . "</td></tr>";
        $count++;
    }

    if ($count < 5) {
        for ($i=0; $i < (5-$count); $i++) { 
            $wishlistBody .= "<tr><td>&nbsp</td><td hidden></td></tr>\n";
        }
    }

    if ($wishlistBody == '') {
        for ($i=0; $i <= 5; $i++) { 
            $wishlistBody .= "<tr><td>&nbsp</td><td hidden></td></tr>\n";
        }
    }

    echo $wishlistBody;
    $database->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['inputWish'])) {
        $wish_item = $_POST['inputWish'];
        $wish_id = rand(0, 99999999);

        $sql_wishlist_id_exists = <<<EOF
        SELECT wishlist_id FROM wishlist WHERE wishlist_id=$wish_id;
        EOF;

        do {
            $ret = $db->query($sql_wishlist_id_exists);
            if ($ret->fetchArray(SQLITE3_ASSOC)) {
                $wish_id = rand(0, 99999999);
            } else {
                break;
            }
        } while ($ret->fetchArray(SQLITE3_ASSOC));

        $sql_create_wish = <<<EOF
        INSERT INTO wishlist(wishlist_id, user_id, room_id, item) 
        VALUES($wish_id, $user_id, "$room_code", "$wish_item");
        EOF;

        $db->exec($sql_create_wish);
        
        echo echoWishlist($user_id, $room_code, $db);
    } elseif (isset($_POST['deleteWishes'])) {
        $deleteWishes = $_POST['deleteWishes'];

        foreach ($deleteWishes as $deleteWish) {
            $sql_delete_wish = <<<EOF
            DELETE FROM wishlist
            WHERE wishlist_id = $deleteWish;
            EOF;

            $db->exec($sql_delete_wish);
        }

        echo echoWishlist($user_id, $room_code, $db);
    } elseif (isset($_POST['load'])) {
        if ($_POST['load'] == "load") {
            echo echoWishlist($user_id, $room_code, $db);
        }
    }
}
?>

                                