<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Simples</title>
    
</head>
<body>
<div class="container">
        <h1>Calculadora de Parcelas</h1>
        <form method="POST" action="">
            <label for="divida">Valor da Dívida:</label>
            <input type="number" id="divida" name="divida" required>

            <label for="juros">Taxa de Juros (%):</label>
            <input type="number" id="juros" name="juros" required>

            <label for="parcelas">Número de Parcelas:</label>
            <input type="number" id="parcelas" name="parcelas" required>

            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $divida = floatval($_POST['divida']);
            $juros = floatval($_POST['juros']) / 100;
            $parcelas = intval($_POST['parcelas']);

    
            $montanteTotal = $divida * pow(1 + $juros, $parcelas);
            $valorParcela = $montanteTotal / $parcelas;
            $mediaParcelas = $valorParcela; // A média das parcelas é igual ao valor da parcela

            
            echo "<div id='resultado' class='resultado'>";
            echo "<h2>Resultados</h2>";
            echo "<p>Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "</p>";
            echo "<p>Montante total: R$ " . number_format($montanteTotal, 2, ',', '.') . "</p>";
            echo "<p>Média das parcelas: R$ " . number_format($mediaParcelas, 2, ',', '.') . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
