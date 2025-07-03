<?php
class Gato{
    public function fazersom(){
        echo "Miau!";
    }
}
class Cachorro{
     public function fazersom(){
         echo "Au Au";
     }
}

function emitirSom($animal){
    return $animal->fazersom();
}

?>