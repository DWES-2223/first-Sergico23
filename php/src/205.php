<!DOCTYPE html>
<html lang="es">

<?php
$quantitat = $_GET["quantitat"];
$bitllets = [500, 200, 100, 50, 20, 10, 5];
$monedes = [2, 1];

foreach ($bitllets as $bitllet) {
    $quantitatBitllets = intval($quantitat / $bitllet);
    if ($quantitatBitllets > 0) {
        echo "$quantitatBitllets bitllet de $bitllet\n";
        $quantitat %= $bitllet;
    }
}

foreach ($monedes as $moneda) {
    $quantitatMonedes = intval($quantitat / $moneda);
    if ($quantitatMonedes > 0) {
        echo "$quantitatMonedes moneda de $moneda\n";
        $quantitat %= $moneda;
    }
}
?>

<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
</body>
</html>