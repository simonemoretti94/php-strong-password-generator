<?php

session_start();

if (isset($_GET['password'])) {
    $pwordLength = $_GET['password'];
    echo 'if password: ' . $pwordLength . '<br>';
} else {
    echo 'password non impostata.<br>';
}


include_once __DIR__ . '/functions/functions.php';


$newPword = passwordGenerator($pwordLength);

echo 'postF password: ' . $newPword . '<br>';

$_SESSION['newpword'] = $newPword;

echo 'session pword: ' . $_SESSION['newpword'];

header('Location: ./index.php');
exit('exit!');
