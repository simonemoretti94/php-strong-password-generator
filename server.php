<?php

session_start();

var_dump($_GET);

if (isset($_GET['password']) && !empty($_GET['password'])) {

    if (!is_numeric($_GET['password'])) {
        header('Location: ./error.php');
        exit("the number isn't integer! 👀");
    }
    $pwordLength = $_GET['password'];
    echo 'if password: ' . $pwordLength . '<br>';
} else {
    header('Location: ./error.php');
    exit("empty field! 🐱‍💻");
}

#including external functions
include_once __DIR__ . '/functions/functions.php';


$newPword = passwordGenerator($pwordLength);
$_SESSION['newpword'] = $newPword;


#back to index.php
header('Location: ./success.php');
exit('exit!');
