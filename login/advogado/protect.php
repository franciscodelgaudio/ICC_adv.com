<?php
// Verifica se a sessão não está iniciada
if (!isset($_SESSION)) {
    session_start();
}
// Verifica se o ID da sessão não está definido
else if (!isset($_SESSION['id'])) {
    // Encerra a execução do código e exibe uma mensagem de erro
    die("Você não pode acessar essa página porque não está logado. <p><a href=\"login_advogado.php\">Entrar</a></p>");
}
?>
