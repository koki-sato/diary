<?php

require_once __DIR__ . '/lib/config.php';
require_once __DIR__ . '/lib/session.php';
require_once __DIR__ . '/lib/function.php';
requireUnloginedSession();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (checkPost(['username', 'password'])) {
        $link = mysql_connect('localhost', DB_USERNAME, DB_USERPASS);
        mysql_select_db(DB_NAME, $link);

        $username = mysql_real_escape_string($_POST["username"]);
        $password = mysql_real_escape_string($_POST["password"]);

        $query = "SELECT id, username FROM users WHERE username = '$username' AND password = '$password'";

        $result = mysql_query($query);
        if ($result) {
            if (mysql_num_rows($result) > 0) {
                session_regenerate_id(true);
                $user = mysql_fetch_array($result);
                $_SESSION["user_id"] = $user["id"];
                header('Location: /');
                exit();
            } else {
                $error = 'Your username or password was incorrect.';
            }
        } else {
            $error = 'Your username or password was incorrect.';
        }
    } else {
        $error = 'Please input username and password.';
    }
    if (isset($error)) {
        include 'views/login.php';
    }
} else {
    include 'views/login.php';
}
