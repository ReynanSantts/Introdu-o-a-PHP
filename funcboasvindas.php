<?php
$nome = 'Reynan';
function boasvindas(string $nome){
    return '<h1> Bem-vindo(a)'.$nome;
}
echo boasvindas( '<h1>'.$nome);
?>