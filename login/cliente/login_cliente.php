<?php
// Configurações de conexão com o banco de dados
$usuario = 'root';
$senha = '';
$database = 'tres_cadastro';
$host = 'localhost';

// Criar uma nova conexão com o banco de dados usando a classe mysqli
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verifica se ocorreu um erro na conexão com o banco de dados
if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

// Verifica se os campos de login e senha foram enviados
if (isset($_POST['login']) || isset($_POST['senha'])) {
    // Verifica se o campo de login está vazio
    if (strlen($_POST['login']) == 0) {
        echo '<script> alert("Preencha seu login") </script>';
    }
    // Verifica se o campo de senha está vazio
    else if (strlen($_POST['senha']) == 0) {
        echo '<script> alert("Preencha sua senha") </script>';
    } else {
        // Obtém os valores de login e senha enviados no formulário
        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // Cria a consulta SQL para buscar o usuário com o login e senha fornecidos
        $sql_code = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

        // Executa a consulta SQL
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        // Obtém a quantidade de linhas retornadas pela consulta
        $quantidade = $sql_query->num_rows;

        // Verifica se existe apenas um registro retornado pela consulta
        if ($quantidade == 1) {
            // Obtém os dados do usuário retornado pela consulta
            $usuario = $sql_query->fetch_assoc();

            // Inicia a sessão, se ainda não estiver iniciada
            if (!isset($_SESSION)) {
                session_start();
            }

            // Define as variáveis de sessão com os dados do usuário
            $_SESSION['user'] = $usuario['ID'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['login'] = $login;

            // Redireciona para a página do painel
            header("Location: painel.php");
        } else {
            echo '<script>alert("Falha ao logar! Email ou senha incorretos")</script>';
        }
    }
}
?>
