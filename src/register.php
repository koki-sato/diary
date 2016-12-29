<?php

require_once __DIR__ . '/lib/config.php';
require_once __DIR__ . '/lib/session.php';
require_once __DIR__ . '/lib/function.php';
requireUnloginedSession();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (checkPost(['username', 'password', 'confirm'])) {
        if ($_POST['password'] !== $_POST['confirm']) {
            $error = 'Password and confirmation password do not match.';
        } else {
            $link = mysql_connect('localhost', DB_USERNAME, DB_USERPASS);
            mysql_select_db(DB_NAME, $link);

            $username = mysql_real_escape_string($_POST["username"]);
            $password = mysql_real_escape_string($_POST["password"]);

            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            $result = mysql_query($query);
            if ($result) {
                session_regenerate_id(true);
                $result = mysql_query("SELECT id FROM users WHERE username = '$username'");
                $user = mysql_fetch_array($result);
                $_SESSION["user_id"] = $user["id"];
                header('Location: /');
                exit();
            } else {
                $error = 'Signup failed.';
            }
        }
    } else {
        $error = 'Please input username and password.';
    }
    if (isset($error)) {
        include 'views/register.php';
    }
} else {
    include 'views/register.php';
}
