<?php

require_once __DIR__ . '/lib/session.php';
requireLoginedSession();

include 'views/new_article.php';
