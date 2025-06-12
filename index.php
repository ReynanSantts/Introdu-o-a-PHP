<?php

//Irmão do Console.log()
echo"<h1>Hello world</h1>";
echo"<hr>";
$nome = "Reynan";
$idade = "17";
if($nome === "Reynan" and $idade === "17"){
    echo "Seja bem vindo(a) ".$nome;
}

echo "<br>";

//Função
function saudacao(string $nome){
    return "Olá ".$nome;
}
echo saudacao($nome) . "<br>";

//Debugando variaveis
var_dump($nome, $idade);
?>

