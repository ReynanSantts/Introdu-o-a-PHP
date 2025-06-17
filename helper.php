<?php

/**
 * Função de validação e-mail
 * @param  string $email Endereço de e-mail a ser validade
 * @return bool resultado booleano da validação
 */

function validarEnderecoEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>