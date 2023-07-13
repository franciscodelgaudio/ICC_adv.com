<?php
// Verifica se a sessão não está iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Destroi a sessão
session_destroy();

// Redireciona para a página de login do cliente
header("Location: login_cliente.php");
?>
