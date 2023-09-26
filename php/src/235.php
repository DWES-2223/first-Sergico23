<!DOCTYPE html>
<html lang="en">
<?php
$persona1 = [ 'nombre' => 'Sergi', 'altura' => 180, 'email' => 'sergicol@gmail.com' ];
$persona2 = [ 'nombre' => 'Alejandro', 'altura' => 183, 'email' => 'ponsi@gmail.com'];
$persona3 = [ 'nombre' => 'Maria', 'altura' => 168, 'email' => 'marieta@gmail.com'];
$persona4 = [ 'nombre' => 'Nuria', 'altura' => 169, 'email' => 'nubogen@gmail.com'];
$persona5 = [ 'nombre' => 'Javi', 'altura' => 170, 'email' => 'elchulo@gmail.com'];
$personas = [$persona1,$persona2,$persona3,$persona4,$persona5];
?>
<head>
    <meta charset="UTF-8">
    <title>Personas</title>
</head>
<body>
<table>

    <thead>
    <tr>
        <th>Nombre</th>
        <th>Altura</th>
        <th>Email</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($personas as $persona) { ?>
        <tr>
            <td><?=$persona['nombre']?></td>
            <td><?=$persona['altura']?></td>
            <td><?=$persona['email']?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>