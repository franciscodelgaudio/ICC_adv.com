<?php
// Receber os valores do formulario
$login = $_POST['login']; // Recebe o valor do campo login do formulario
$senha = $_POST['senha']; // Recebe o valor do campo senha do formulario

//Configuracoes de conexao com o banco de dados
$usuario = 'root';
$senha_bd = '';
$database = 'tres_cadastro';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha_bd, $database);

    if ($mysqli -> connect_error){
      printf("connection failed", $mysqli-> connect_error);
      exit();
    }

    // Criar uma tabela com o nome fornecido no campo login
      $sql = "create table $login (
        processo_um varchar (150), 
        nome varchar (150),
        vara varchar (150),
        procedimento varchar (150))";
    
    // Executar a consulta SQL para criar a tabela
    if ($mysqli->query($sql)){
      printf("Table create sucessfuly <br />");
    }

// Verificar se o login ja existe no banco de dados
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($mysqli,$query_select);

// Verificar se houve algum erro na consulta
if (!$select) {
    die("Erro na consulta: " . mysqli_error($mysqli));
}

// Obter o resultado da consulta em um array
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  // Verificar se o campo login esta vazio
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    painel.php';</script>";

    }else{
      // Verificar se o login ja existe no banco de dados
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        painel.php';</script>";
        die();

      }else{

        $query = "INSERT INTO usuarios (login ,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($mysqli, $query);

        // Verificar se o usuario foi inserido com sucesso
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='painel.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='painel.php'</script>";
        }
      }
    }
?>