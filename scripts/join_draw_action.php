<?php
include "database_client.php";
include "fisher_yates.php";
$db = new MyDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $user_id = $_SESSION['user_id'];

    $sql_check_draw_condition = <<<EOF
        SELECT COUNT(*) FROM user
        LEFT JOIN wishlist
        ON wishlist.user_id = user.id
        WHERE wishlist_id IS NULL;
        EOF;

    $count = ($db->query($sql_check_draw_condition))->fetchArray(SQLITE3_ASSOC);
    
    if($count['COUNT(*)'] > 0){
        echo $count['COUNT(*)'];
        exit();
    } else {
        $room_code = $_SESSION['room'];

        $sql_get_room_members = <<<EOF
            SELECT * FROM belongs_in JOIN user
            ON user.id = belongs_in.user_id
            WHERE room_code = "$room_code"
            ORDER BY name
            EOF;
            
        $participants = [];
        $participantsQuery = $db->query($sql_get_room_members);
        while ($participant = $participantsQuery->fetchArray(SQLITE3_ASSOC)) {
            $participants[] = $participant['user_id'];
        }

        $draws = shuffleDraw($participants);
        foreach ($draws as $draw) {
            $santa_id = $draw[0];
            $recipient_id = $draw[1];

            $draw_id = rand(0, 999999);

            $sql_draw_id_exists = <<<EOF
            SELECT * FROM draw WHERE draw_id = $draw_id;
            EOF;

            do {
                $ret = $db->query($sql_draw_id_exists);
                if ($ret->fetchArray(SQLITE3_ASSOC)) {
                    $draw_id = rand(0, 999999);
                } else {
                    break;
                }
            } while ($ret->fetchArray(SQLITE3_ASSOC));

            $sql_insert_draw = <<<EOF
                INSERT OR IGNORE INTO draw(draw_id, santa_id, recipient_id, in_room_code) 
                VALUES($draw_id, $santa_id, $recipient_id, "$room_code");
                EOF;

            $db->exec($sql_insert_draw);         
        }

        $sql_next_state = <<<EOF
            UPDATE room
            SET state = 2
            WHERE room_code = "$room_code";
            EOF;

        $db->exec($sql_next_state);
        
        // var_dump($db);
        echo $count['COUNT(*)'];
        // exit();
    }
}
?>