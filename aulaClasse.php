<?php
require "Carros.php";
require "Animais.php";
require "mediaPonderada.php";
//Objetos (instâncias de classe)
$carro = new Carros();
$carro2 = new Carros();
//Uso da herança
$carroEletrico = new CarroEletrico();
echo"<hr>";
//Polimorfismo
$gato = new Gato();
echo emitirSom($gato);
echo '<br>';
echo '<hr>';

$carroEletrico->cor = "Branco";
$carroEletrico->marca = "BYD";
$carroEletrico->modelo = "SEAL";
$carroEletrico->autonomia = "372km";

//Atributos especificos de cada objeto
$carro->cor = "Preto";
$carro->marca = "Fiat";
$carro->modelo = "Uno velho";

$carro2->cor = "Roxo";
$carro2->marca = "BMW";
$carro2->modelo = "320I 2.0 16v Turbo M Sport";

echo ("Cor: ".$carro->cor."<br>"."Marca: ".$carro->marca."<br>"."Modelo: ".$carro->modelo."<br>");
echo '<hr>';
echo ("Cor: ".$carro2->cor."<br>"."Marca: ".$carro2->marca."<br>"."Modelo: ".$carro2->modelo."<br>");
echo '<hr>';
echo ("Cor: ".$carroEletrico->cor."<br>"."Marca: ".$carroEletrico->marca."<br>"."Modelo: ".$carroEletrico->modelo."<br>"."Autonomia: ".$carroEletrico->autonomia."<br>" );
echo '<hr>';
?>