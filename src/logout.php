<?php

require_once __DIR__ . '/lib/session.php';
requireLoginedSession();

$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', 1);
}

session_destroy();
header ('Location: ./login.php');
