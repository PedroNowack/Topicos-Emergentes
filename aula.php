<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>

<form method="post" action="aula.php">
    Digite o seu nome:
    <input type="text" size="80" name="txtnome">
    <input type="submit" value="Enviar" name="Enviar">

</form>

<?php
if (isset($_POST["Enviar"])) {
$_txtnome=$_POST["txtnome"] ;
echo "<h2>Seu nome: $_txtnome</h2>";}
?>
    
</body>
</html>