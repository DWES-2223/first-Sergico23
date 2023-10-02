<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 272</title>
</head>
<?php
include ('atletes.php');
include ('functions.php');
global $records;
?>
<body>
<?php
$fechas = array_column_ext($records,'data',-1);
$club = array_column_ext($records,'club',-1);
$ciudades = array_column_ext($records,'lloc',-1);
$nacimientos = array_column_ext($records,'natalici',-1);
$atletas = array_column_ext($records,'atleta',-1);

$recordAntiguo = vell($fechas);
$clubMasLaureado = laureado($club);
$ciudadMasLaureada = laureado($ciudades);
$personaMasLaureada = laureado($atletas);
$atletaJoven = jove($nacimientos,$fechas);
$atletasMasJoven = '';
foreach ($records as $record => $datos){
    if($record == $atletaJoven[0]){
        $atletasMasJoven = $records[$record]['atleta'];
    }
}
?>
<p>Record més antic:  <?= $recordAntiguo ?></p>
<p>Club amb més títols: <?= $clubMasLaureado ?></p>
<p>Persona amb més records: <?= $personaMasLaureada ?> </p>
<p>Ciutat més propicia: <?= $ciudadMasLaureada?></p>
<p>Mes jove en aconsegir el record: <?= $atletasMasJoven?> - <?= $atletaJoven[1]?> anys</p>
<?php
include ('270a.php');
?>
</body>
</html>