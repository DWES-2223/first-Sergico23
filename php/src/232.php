<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array sexes</title>
</head>
<?php
$numeros = [];
for ($i=0; $i<100; $i++){
    $num = rand(0,1)?'M':'F';
    array_push($numeros, $num);
}
$nous = array_count_values($numeros);
foreach ($nous as $sexe => $numero){
    echo "<p>$sexe: $numero</p>";
}
?>
<body>
</body>
</html>