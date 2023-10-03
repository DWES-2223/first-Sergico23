<!DOCTYPE html>
<html lang="es">

<?php
    if(isset($_GET["hora"]) && isset($_GET["minut"]) && isset($_GET["segon"])) {
        $hora = $_GET["hora"];
        $minut = $_GET["minut"];
        $segon = $_GET["segon"];

        $segon++;
        if ($segon == 60) {
            $minut++;
            $segon = 0;
        }
        if ($minut == 60) {
            $hora++;
            $minut = 0;
        }
        if ($hora == 24) {
            $hora = 0;
            $minut = 0;
            $segon = 0;
        }

        echo "$hora:$minut:$segon";
    } else {
        echo "Posa les variables hora, minut i segon pel QueryString";
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