<?php require_once '../../__constants.php';
session_start();
echo time();
if (time() == '1553411510') {
    msggg('Hello World', 'success');
}

function msggg($msg, $type)
{
    if (!empty($msg) && empty($_SESSION[$msg])) {
        if (!empty($_SESSION[$msg])) {
            unset($_SESSION[$msg]);
            echo 'Unseting';
        }
    }
    $_SESSION[$msg] = $msg;
    echo 'Set Variable ', $_SESSION[$msg];

    if (!empty($_SESSION[$msg])) {
        echo '<h1>' . $_SESSION[$msg] . '</h1>';
        unset($_SESSION[$msg]);
    }
}
