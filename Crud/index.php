<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>AGENDA</h1>
    <form action="index.php" method="post">
     Nome: <br>
     <input type="text" id="nome" placeholder="Digite seu nome" class="input" name="nome" >
    <br><br>
     Telefone: <br>
     <input type="text" id="tel" placeholder="Digite seu telefone" class="input" name="tel" >
     <br><br>
     Endereço: <br>
     <input type="text" id="endereco" placeholder ="Digite seu endereço" class="input" name="endereco">
     <br><br> 
     <input type="submit" value="Cadastrar" class="btn"><br><br>
    </form>
</body>
<?php

    include "conexao.php";
                    
    $sqli = "select * from contatos";
    $res = mysqli_query($conexao,$sqli);
    if(mysqli_num_rows($res)>0){
        while ($linha= mysqli_fetch_assoc($res)) {
            echo "<br>". $linha['nome']."<br>".$linha['endereco']."<br>".$linha['telefone'];
        }

    }else{
        echo "Nenhum contato encontrado";
    }
?>
    </html>