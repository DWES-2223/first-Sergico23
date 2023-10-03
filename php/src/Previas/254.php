<?php
function esPalindroma($palabra) {
    $palabra = strtolower(str_replace(' ', '', $palabra));
    $palabraInvertida = strrev($palabra);
    return $palabra === $palabraInvertida;
}

$palabra2 = "hola";
$palabra3 = "reconocer";

echo "Palabra 1: '$palabra2' es palíndroma? " . (esPalindroma($palabra2) ? "Sí" : "No") . "<br>";
echo "Palabra 2: '$palabra3' es palíndroma? " . (esPalindroma($palabra3) ? "Sí" : "No") . "<br>";
?>