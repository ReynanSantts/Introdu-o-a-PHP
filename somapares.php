<?php
for($i = 1; $i <= 100; $i++){
    echo $i .'<br>';
    if($i %2== 0){
        $soma = $i + $i;
    }
}
echo 'A soma dos números pares é = '.$soma;
?>