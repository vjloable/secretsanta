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
    
    if ($ret->fetchArray(SQLITE3_ASSOC)) {
        $db->close();
        header("Location: /secretsanta/lobby.php");
        exit();
    } else {
        $db->close();
        header("Location: /secretsanta/login.php");
        exit();
    }
}
?>