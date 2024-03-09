<?php

session_start();

var_dump($_GET);

if (isset($_GET['passwordL']) && !empty($_GET['passwordL'])) {
    if (isset($_GET['si']) || isset($_GET['no'])) {
        $allowRepetition = $_GET['si'] ? $_GET['si'] : $_GET['no'];
    }

    if (isset($_GET['lettere'])) {
        $allowLetters = $_GET['lettere'];
    }
    if (isset($_GET['numeri'])) {
        $allowNumbers = $_GET['numeri'];
    }
    if (isset($_GET['simboli'])) {
        $allowSymbols = $_GET['simboli'];
    }

    if (!is_numeric($_GET['passwordL'])) {
        header('Location: ./error.php');
        exit("the number isn't integer! 👀");
    }
    $pwordLength = $_GET['passwordL'];
    echo 'if password: ' . $pwordLength . '<br>';
} else {
    header('Location: ./error.php');
    exit("empty field! 🐱‍💻");
}

#including external functions
include_once __DIR__ . '/functions/functions.php';


$newPword1 = basicPasswordGenerator($pwordLength);
$_SESSION['newpword1'] = $newPword1;

$newPword2 = ComplexPasswordGenerator($pwordLength, $allowRepetition, $allowLetters, $allowNumbers, $allowSymbols);
$_SESSION['newpword2'] = $newPword2;


#back to index.php
header('Location: ./success.php');
exit('exit!');
