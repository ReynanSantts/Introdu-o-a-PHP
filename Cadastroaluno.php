<?php

$alunos =[
    "Reynan" =>["nota" =>"10"],
    "Thiago" =>["nota" =>"8"],
    "Lucas" =>["nota" =>"9"]
];
$media = 0;
echo"<br>";

foreach ($alunos as $alunoNome => $alunoNota){
    echo "Nome: ".$alunoNome."<br>";
    echo "Nota: ".$alunoNota['nota'].'<br>'.'<hr>';
    $media += $alunoNota['nota']/3;

}
echo "Média da turma: ". number_format($media,2,'.','.');
?>