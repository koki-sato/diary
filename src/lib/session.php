<?php

function requireSession() {
    @session_start();
}

function requireUnloginedSession() {
    @session_start();
    if (isset($_SESSION["user_id"])) {
        header('Location: /');
        exit;
    }
}

function requireLoginedSession() {
    @session_start();
    if (!isset($_SESSION["user_id"])) {
        header('Location: /login.php');
        exit;
    }
}
