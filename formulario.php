<?php
$_txtnome=$_POST["txtnome"] ;

$_txtidade=$_POST["txtidade"] ;

$_txtgen=$_POST["txtgen"] ;

$_txtendereco = $_POST["txtendereco"];

if($_txtidade >= 18){
    echo "Minha idade é: $_txtidade, seu gênero é: $_txtgen e seu endereço é: $_txtendereco ";
}else{
    echo "Menor de idade";
}
?>