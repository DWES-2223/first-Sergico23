<?php
include_once ('functions.php');

$num = 12345;
$quantitatDigits = digits($num);
echo "El número $num té $quantitatDigits dígits.";
echo '<br>';

$num = 12345;
$posicio = 2;
$digit = digitsN($num, $posicio);
echo "El dígit a la posició $posicio és $digit.";
echo '<br>';

$num = 12345;
$cantDigits = 2;
$nouNum = llevaDarrere($num, $cantDigits);
echo "El número $num amb $cantDigits dígits llevats per darrere és $nouNum.";
echo '<br>';

$num = 12345;
$cantDigits = 2;
$nouNum = llevaDavant($num, $cantDigits);
echo "El número $num amb $cantDigits dígits llevats per davant és $nouNum.";
