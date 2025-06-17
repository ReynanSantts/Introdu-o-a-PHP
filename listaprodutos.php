<?php

$produtos = [
    "Manga" => ["chave" => "Manga", "preço" =>"R$ 8,00"],
    "Banana" =>["chave" => "Banana", "preço" =>"R$ 5,00"],
    "Maçã"=>["chave" => "Maça", "preço" =>"R$ 7,00"]
];
foreach ($produtos as $produto) {
    echo"<h1>Nome: ".$produto["chave"]."Preço: ".$produto["preço"]."<hr>";
}
?>