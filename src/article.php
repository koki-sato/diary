<?php

require_once __DIR__ . '/lib/config.php';
require_once __DIR__ . '/lib/session.php';
require_once __DIR__ . '/lib/function.php';
requireLoginedSession();

$link = mysql_connect('localhost', DB_USERNAME, DB_USERPASS);
mysql_select_db(DB_NAME, $link);

$articles = array();
$user_id = $_SESSION["user_id"];
$query = "SELECT title, body, created_at FROM articles WHERE user_id = $user_id ORDER BY id DESC LIMIT 3";

$offset = 0;
if (isset($_GET["offset"])) {
    $offset = $_GET["offset"];
    $query = "($query OFFSET $offset)";
}

$result = mysql_query($query);
if ($result) {
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            array_push($articles, $row);
        }
    }
} else {
    $error = "Error: $query";
}

include 'views/article.php';
