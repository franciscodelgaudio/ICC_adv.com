<?php
// Receber os valores do formulário
$tabela = $_POST['tabela']; // Recebe o valor do campo tabela do formulário
$nome = $_POST['nome']; // Recebe o valor do campo nome do formulário
$procedimento = $_POST['procedimento']; // Recebe o valor do campo procedimento do formulário
$processo_um = $_POST['processo_um']; // Recebe o valor do campo processo_um do formulário
$vara = $_POST['vara']; // Recebe o valor do campo vara do formulário

// Configurações de conexão com o banco de dados
$usuario = 'root';
$senha_bd = '';
$database = 'tres_cadastro';
$host = 'localhost';

// Criar uma nova conexão com o banco de dados usando a classe mysqli
$mysqli = new mysqli($host, $usuario, $senha_bd, $database);

// Inserir os valores no banco de dados
$query = "INSERT INTO $tabela (nome, procedimento, processo_um, vara) VALUES ('$nome', '$procedimento', '$processo_um', '$vara')";
$insert = mysqli_query($mysqli, $query);

// Verificar se o insert foi executado com sucesso
if ($insert) {
  echo "<script language='javascript' type='text/javascript'>
    alert('Enviado!');window.location.href='painel.php'</script>";
} else {
  echo "<script language='javascript' type='text/javascript'>
    alert('Não foi possível cadastrar esse usuário');window.location.href='painel.php'</script>";
}

?>
