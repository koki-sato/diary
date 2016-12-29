<?php

function checkPost($keys=[]) {
    $is_ok = true;
    foreach ($keys as $key) {
        if (empty($_POST[$key])) {
            $is_ok = false;
        }
    }
    return $is_ok;
}

function h($var) {
    if (is_array($var)){
        return array_map(h, $var);
    } else {
        return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
    }
}
