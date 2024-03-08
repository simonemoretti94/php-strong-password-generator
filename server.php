<?php

session_start();

if (isset($_GET['password']) && !empty($_GET['password'])) {

    if (!is_numeric($_GET['password'])) {
        header('Location: ./index.php');
        exit("the number isn't integer! 👀");
    }
    $pwordLength = $_GET['password'];
    echo 'if password: ' . $pwordLength . '<br>';
} else {
    header('Location: ./index.php');
    exit("empty field! 🐱‍💻");
}

#including external functions
include_once __DIR__ . '/functions/functions.php';


$newPword = passwordGenerator($pwordLength);
$_SESSION['newpword'] = $newPword;
#echo 'postF password: ' . $newPword . '<br>';
#echo 'session pword: ' . $_SESSION['newpword'];

#back to index.php
header('Location: ./index.php');
exit('exit!');
