

<!DOCTYPE html>
<html lang="es">
    <?php 
        $nombre= "Sergi";
        $apellido1 = "Coloma";
        $apellido2 = "Hernández";
        $email = "sergicoloma23@gmail.com";
        $anyoNacimiento = 2003;
        $telefono = 644337614;
    ?>
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    
<table>
    <tr>
        <td>Nom</td>
        <td><?=$nombre?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?= $apellido1.' '.$apellido2 ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?= $anyoNacimiento ?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?= $telefono ?></td>
    </tr>
</table>
</body>
</html>