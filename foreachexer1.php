<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$v1 = range(0, 12);
$v2 = range(0, 100, 10);
$v3 = range('a', 'i');
$v4 = range('e', 'a'); 


function exibirArray($array) {
    foreach ($array as $valor) {
        echo htmlspecialchars($valor) . "<br>";
    }
    echo "<br>"; 
}


echo "<h2>Vetor 1 (0 a 12):</h2>";
exibirArray($v1);

echo "<h2>Vetor 2 (0 a 100, passo 10):</h2>";
exibirArray($v2);

echo "<h2>Vetor 3 (a a i):</h2>";
exibirArray($v3);

echo "<h2>Vetor 4 (e a a):</h2>";
exibirArray($v4);
?>
</body>
</html>