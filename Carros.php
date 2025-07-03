<?php
class Carros{
    public $marca;
    public $modelo;
    public $cor;

    //Métodos
    public function acelerar(){
        echo "Velozes e Furiosos";
    }
    public function frear(){
        echo "🚓🚓🚓🚨🚨🚨 Pare o carro ⭐⭐⭐⭐⭐⭐";
    }
}

// Herança = Extends
class CarroEletrico extends Carros{
    // Polimorfismo = Public, Private, Protected
    public $autonomia;
    public function recarregar(){
        echo "Recarregando a bateria do carro elétrico";
    }
}
?>