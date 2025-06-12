<?php
$usuario = 'Reynan Mesquita';
var_dump( 'Nome de usuario| '.$usuario );
echo'<br>';
$senha = '145233';
var_dump( 'Senha do usuario| '.$senha );

if( $usuario === 'Reynan Mesquita' and $senha === '145233') {
    echo'<br>';
    echo ' Login bem sucedido';
}
else{
    echo'<br>';
    echo'Credenciais incorretas';
}
?>