<!DOCTYPE html>
<html lang="en">
<?php
include_once('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantitat = $_POST['quantitat'];
    $resultat = '';

    if ($_POST['conversio'] == 'peseta2euros') {
        $resultat = peseta2euros($quantitat);
    } elseif ($_POST['conversio'] == 'euro2pesetes') {
        $resultat = euro2pesetes($quantitat);
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moneda</title>
</head>
<body>
<h1>Conversor de moneda</h1>

<form method="POST" action="243.php">
    <label for="quantitat">Quantitat:</label>
    <input type="number" name="quantitat" id="quantitat" required><br>

    <label for="conversio">Conversió:</label>
    <select name="conversio" id="conversio">
        <option value="peseta2euros">Peseta a Euro</option>
        <option value="euro2pesetes">Euro a Peseta</option>
    </select><br>

    <input type="submit" value="Convertir">
</form>

<?php
if (isset($resultat)) {
    echo "<p>Resultat: {$resultat}</p>";
}
?>
</body>
</html>
