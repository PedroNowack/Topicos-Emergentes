<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start(); 


if (!isset($_SESSION['convidados'])) {
    $_SESSION['convidados'] = []; 
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) {
    $nome = trim($_POST['nome']);
    if (!in_array($nome, $_SESSION['convidados'])) { 
        $_SESSION['convidados'][] = $nome; 
    }
}


function exibirConvidados($convidados) {
    if (empty($convidados)) {
        echo "<p>Nenhum convidado na lista.</p>";
    } else {
        echo "<ul>";
        foreach ($convidados as $convidado) {
            echo "<li>" . htmlspecialchars($convidado) . "</li>";
        }
        echo "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Convidados</h1>
        <form method="POST" action="">
            <label for="nome">Nome do Convidado:</label>
            <input type="text" id="nome" name="nome" required>
            <button type="submit">Adicionar Convidado</button>
        </form>

        <h2>Convidados:</h2>
        <?php exibirConvidados($_SESSION['convidados']); ?>
    </div>
</body>
</html>
</body>
</html>