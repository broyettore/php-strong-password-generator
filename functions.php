<?php

$passChars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$genPass = $_GET["genPass"];

function createPassword($passlen, $passCombo) {

    $password = "";

    if (!empty($passlen)) {
        for ($i = 0; $i <= $passlen - 1; $i++) {
            $randomNumber = random_int(0, strlen($passCombo) - 1);
            $randomPass= $passCombo[$randomNumber];
            $password .= $randomPass;
           }
    }

    return $password;
};
