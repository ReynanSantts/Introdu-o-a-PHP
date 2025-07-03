<?php

class Aluno{
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;

    public function calcularMedia(){
        // Exemplo de cálculo de média ponderada
        $media = (($this->nota1 * $this->peso1) + ($this->nota2 * $this->peso2)) / ($this->peso1 + $this->peso2);
        return $media;
    }

    public function exibirDados(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Nota 1: " . $this->nota1 . "<br>";
        echo "Nota 2: " . $this->nota2 . "<br>";
        echo "Peso 1: " . $this->peso1 . "<br>";
        echo "Peso 2: " . $this->peso2 . "<br>";
        echo "Média Ponderada: " . $this->calcularMedia() . "<br>";
    }
    public function verificarAprovacao(){
        $media = $this->calcularMedia();
        if ($media >= 7) {
            echo "Aluno aprovado com média: " . $media . "<br>";
        } else {
            echo "Aluno reprovado com média: " . $media . "<br>";
        }
    }
}

// Instanciando e exibindo os dados do aluno
$aluno = new Aluno();
$aluno->nome = "João";
$aluno->idade = 20;
$aluno->matricula = "123456";
$aluno->nota1 = 8.5;
$aluno->nota2 = 7.0;
$aluno->peso1 = 2;
$aluno->peso2 = 3;

$aluno->exibirDados();
$aluno->verificarAprovacao();
?>