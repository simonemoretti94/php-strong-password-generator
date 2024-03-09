<?php

function basicPasswordGenerator($numberL)
{
    $tempStr = str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ@&');
    return substr($tempStr, 0, $numberL);
};

function ComplexPasswordGenerator($numberL, $allowRepetition, $allowLetters, $allowNumbers, $allowSymbols)
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

    if ($characters === '') {
        header('Location: ./error.php');
        exit('No parameters 🐲');
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
