<!DOCTYPE html>
<html lang="en">
<?php
$array = [];
for ($i = 0; $i < 34; $i++) {
    $num = rand(0,100);
    array_push($array,$num);
    sort($array);
}
print_r($array)
?>
<head>
    <meta charset="UTF-8">
    <title>231</title>
</head>
<body>
<ul>
    <?php
    echo "<li>El major : " . $array[count($array) - 1] . "</li>";
    echo "<li>El menor : $array[0]</li>";
    echo "<li>La mitjana : " . array_sum($array)/count($array) . "</li>";
    ?>
</ul>
</body>
</html>