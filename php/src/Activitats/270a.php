<!-- Capçalera de la taula -->
<tr>
    <th>Distància</th>
    <th>Marca</th>
    <th>Atleta</th>
    <th>Any de naixement</th>
    <th>Club</th>
    <th>Data</th>
    <th>Lloc</th>
</tr>

<!-- Cos de la taula -->
<?php
include 'atletes.php';

foreach ($records as $distancia => $record) :
    ?>
    <tr>
        <td><?= $distancia ?></td>
        <td><?= $record["marca"] ?></td>
        <td><?= $record["atleta"] ?></td>
        <td><?= $record["natalici"] ?></td>
        <td><?= $record["club"] ?></td>
        <td><?= $record["data"] ?></td>
        <td><?= $record["lloc"] ?></td>
    </tr>
<?php endforeach; ?>
