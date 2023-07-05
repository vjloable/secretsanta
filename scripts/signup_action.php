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
  $name = $_POST["name"];

  $sql_user_email_exists = <<<EOF
  SELECT * FROM user WHERE email="$email";
  EOF;

  $ret = $db->query($sql_user_email_exists);
  if ($ret->fetchArray(SQLITE3_ASSOC)) {
    $db->close();

    $error_msg = "E-mail is already taken";
    header("Location: /secretsanta/signup.php"."/?error_msg=". $error_msg);
    exit();
  }

  $id = rand(0, 999999);
  echo "$id\n";

  $sql_user_id_exists = <<<EOF
  SELECT * FROM user WHERE id="$id";
  EOF;

  do {
    $ret = $db->query($sql_user_id_exists);
    if ($ret->fetchArray(SQLITE3_ASSOC)) {
      $id = rand(0, 999999);
      echo "$id\n";
    } else {
      break;
    }
  } while ($ret->fetchArray(SQLITE3_ASSOC));

  $sql_insert_user = <<<EOF
  INSERT INTO user(id, name, email) VALUES ($id, "$name", "$email");
  EOF;

  $ret = $db->exec($sql_insert_user);
  $db->close();
  
  if (!$ret) {
    header("Location: /secretsanta/signup.php");
    exit();
  } else {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['login'] = "VERIFIED";
    header("Location: /secretsanta/lobby.php");
  }
}
?>