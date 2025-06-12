<?php
$nota1 = '9';
$nota2 =  '8';
$nota3 =  '7';
$media = ($nota1+$nota2+$nota3)/3;
$mediafin = '7';
var_dump('Á média do aluno é = '.$media);
echo'<br>';
if($media >= $mediafin){
    echo' A média do aluno é maior que '.$mediafin;
}
else{
    echo 'A média do aluno é menor que 7';
}
?>