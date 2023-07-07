<?php
include "database_client.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new MyDB();

    $email = $_POST["email"];
    $sql_user_email_exists = <<<EOF
    SELECT * FROM user WHERE email="$email";
    EOF;

    $ret = $db->query($sql_user_email_exists);
    
    if ($extracted = $ret->fetchArray(SQLITE3_ASSOC)) {
        $db->close();
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $extracted['name'];
        $_SESSION['login'] = "VERIFIED";
        header("Location: /secretsanta/lobby.php");
        exit();
    } else {
        $db->close();
        $error_msg = "E-mail does not exist.";
        header("Location: /secretsanta/login.php"."/?error_msg=".$error_msg);
        exit();
    }
}
?>