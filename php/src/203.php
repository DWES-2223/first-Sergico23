
<!DOCTYPE html>
<html lang="es">
<?php
$nom = $_POST["nom"];
$cognom1 = $_POST["cognom1"];
$cognom2 = $_POST["cognom2"];
$email = $_POST["email"];
$any = $_POST["any"];
$telefon = $_POST["telefon"];
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
        <td><?=$nom?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?= $cognom1.' '.$cognom2 ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?= $any ?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?= $telefon ?></td>
    </tr>
</table>
</body>
</html>