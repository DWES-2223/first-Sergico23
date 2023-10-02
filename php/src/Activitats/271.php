<!DOCTYPE html>
<html>
<head>
    <title>Modificar Récord d'Atletisme</title>
</head>
<body>
<h1>Modificar Récord d'Atletisme</h1>
<?php
include 'atletes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);

    if (array_key_exists($prova, $records)) {
        $records[$prova]['marca'] = $marca;
        $records[$prova]['atleta'] = $atleta;
        $records[$prova]['natalici'] = $natalici;
        $records[$prova]['club'] = $club;
        $records[$prova]['data'] = $data;
        $records[$prova]['lloc'] = $lloc;
        echo 'El récord ha sido modificado correctamente. <br> <br>';
        include ('270a.php');
    } else {
        echo "La prova $prova no existeix en la llista de records oficials de la FEA";
    }
}
?>
</body>
</html>
