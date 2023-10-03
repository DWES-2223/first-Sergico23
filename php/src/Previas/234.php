<!DOCTYPE html>
<html lang="en">
<?php
$alturas = [
    'Pons'=>183,
    'Maria'=>168,
    'Nuria'=>169,
    'Javier'=>170,
    'Sergi'=>180
];
?>
<head>
    <meta charset="UTF-8">
    <title>Alturas persones</title>
</head>
<body>
<table>

    <thead>
    <tr>
        <th>Nombre</th>
        <th>Altura</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($alturas as $nom => $altura) { ?>
        <tr>
            <td><?=$nom?></td>
            <td><?=$altura?></td>
        </tr>
    <?php } ?>

    <tr>
        <td>Altura Media</td>
        <td><?= array_sum($alturas)/count($alturas) ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>