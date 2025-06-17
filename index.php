<?php

//importação de arquivos
require 'helper.php';

echo validarEnderecoEmail('reyna@example.com');
//echo validarEnderecoEmail('https//google.com');
//Irmão do Console.log()
echo"<h1>Hello world</h1>";
echo"<hr>";
$nome = "Reynan";
$idade = "17";
if($nome === "Reynan" and $idade === "17"){
    echo "Seja bem vindo(a) ".$nome;
}

echo "<br>";

//PHPDoc

/** 
 * Função de saudação
 *@param string Nome do usuario
 *@return string  Mensagem de saudação com o nome do usuario
 *@author Reynan Mesquita <>
*/

function saudacao(string $nome){
    return "Olá ".$nome;
}
echo saudacao($nome) . "<br>";

//Debugando variaveis
var_dump($nome, $idade);

//1° Forma de criar array
echo"";
$arr = array(1,2,3,4,5);

//2° Forma de criar array
$arr2 = [1,2,3,4,5];

echo"<br>";

//Encontrando um elemento pela sua posição dentro de um array
echo $arr[0]." ".$arr2[1];

echo"<br>";

foreach($arr2 as $number){
    echo "Número ".$number."<br>";
}
?>

