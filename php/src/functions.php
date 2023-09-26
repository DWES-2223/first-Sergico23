<?php
function esParell(int $num): bool {
    return $num%2 == 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $aleatori = rand($min, $max);
        array_push($array, $aleatori);
    }
    return $array;
}

function countParells(array &$array): int {
    $count = 0;
    foreach ($array as $num) {
        if ($num % 2 === 0) {
            $count++;
        }
    }
    return $count;
}

function major() {
    $numeros = func_get_args();
    $major = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $major) {
            $major = $numero;
        }
    }
    return $major;
}

function concatenar(...$paraules) {
    return implode(' ', $paraules);
}


function digits(int $num): int{
    return strlen((string)$num);
}

