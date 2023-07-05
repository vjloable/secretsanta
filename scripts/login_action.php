<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../secret_santa.db');
    }
}

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
        $error_msg = "E-mail does not exist. Register this e-mail first.";
        header("Location: /secretsanta/login.php"."/?error_msg=".$error_msg);
        exit();
    }
}
?>