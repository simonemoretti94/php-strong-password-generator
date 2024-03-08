<?php

function passwordGenerator($numberL)
{
    $tempStr = str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ@&');
    return substr($tempStr, 0, $numberL);
};
