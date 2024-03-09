<?php

function passwordGenerator($numberL)
{
    $tempStr = str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ@&');
    return substr($tempStr, 0, $numberL);
};

function passwordGenerator2($numberL, $allowRepetition, $allowLetters, $allowNumbers, $allowSymbols)
{
    $characters = '';

    if ($allowLetters === 'on') {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if ($allowNumbers === 'on') {
        $characters .= '0123456789';
    }

    if ($allowSymbols === 'on') {
        $characters .= '@&';
    }

    if ($allowRepetition === 'no') {
        if (strlen($characters) < $numberL) {
            return 'Errore: Il numero di caratteri unici disponibili è inferiore alla lunghezza richiesta per la password.';
        }

        $characters = str_shuffle($characters);
        return substr($characters, 0, $numberL);
    } else {
        $password = '';

        for ($i = 0; $i < $numberL; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }
}

/*
Questa funzione ora accetta cinque parametri:

$numberL: La lunghezza della password.
$allowRepetition: Se ‘on’, permette la ripetizione di caratteri nella password.
$allowLetters: Se ‘on’, include le lettere nella password.
$allowNumbers: Se ‘on’, include i numeri nella password.
$allowSymbols: Se ‘on’, include i simboli nella password.
La funzione restituisce una stringa di errore se la ripetizione non è consentita e il numero di caratteri unici disponibili è inferiore alla lunghezza richiesta per la password. Altrimenti, genera e restituisce la password come richiesto. Spero che questo ti aiuti! Se hai altre domande, sarò felice di rispondere. 😊
*/
