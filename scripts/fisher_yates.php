<?php
function shuffleDraw(array $users) : array {
    shuffle($users);
    
    $pairs = [];
    $count = count($users);
    
    for ($i = 0; $i < $count; $i++) {
        $santa = $users[$i];
        $recipient = ($i == $count - 1) ? $users[0] : $users[$i + 1];
        $pairs[] = [$santa,$recipient];
    }
    
    return $pairs;
}
?>