<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
$v2 = array('a' => 8, 'b' => 9, 'd' => 6, 'c' => 2, 'e' => 5);
$v3 = array("rg" => "00.000.00- -X", "cpf" => "000.000.000- -00", "cartao de credito" => 12345);
$chamada = array("aluno1" => "alberto", "aluno3" => "bianca", "aluno5" => "carlos", "aluno24" => "maria");


function exibirArray($array) {
    foreach ($array as $chave => $valor) {
        echo "Chave: " . htmlspecialchars($chave) . " - Valor: " . htmlspecialchars($valor) . "<br>";
    }
    echo "<br>"; 
}


echo "<h2>Vetor 1:</h2>";
exibirArray($v1);

echo "<h2>Vetor 2:</h2>";
exibirArray($v2);

echo "<h2>Vetor 3:</h2>";
exibirArray($v3);

echo "<h2>Chamada:</h2>";
exibirArray($chamada);
?>
</body>
</html>