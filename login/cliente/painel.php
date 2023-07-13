<?php
include('protect.php');
include ('login_cliente.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cliente.css">
    <title>Painel</title>
    <style>
        .accordion {
            cursor: pointer;
            padding: 5px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
            text-align: center;
            background-color: rgb(36, 160, 190);
            color:white;
            box-shadow: 0px 2px 3px 1px #888888;
            letter-spacing: 1px;
            font-weight: bold;
            font-size: 15px;
            font-family: sans-serif;
        }

        .panel {
            padding: 10px 18px;
            background-color: white;
        }

        .nome {
            text-align: center;
            font-family: sans-serif;
            font-size: 20px;
            text-transform: uppercase;
            font-weight:bold;
            padding: 20px 0;
        }

    </style>
</head>
<body>
    <div class="pagina">
        <div class="nome">
            <p>Bem - Vindo(a)</p> <?php echo ($_SESSION['login']);?>
        </div>
    <?php
        $host = "localhost";
        $db   = "tres_cadastro";
        $user = "root";
        $pass = "";
        
        // Conexão com o banco de dados
        $con = mysqli_connect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);

        mysqli_select_db($con, $db);

        // Obtendo o valor da sessão de login
        $foi = $_SESSION['login'];

        // Consulta SQL para obter os dados dos processos relacionados ao login
        $query = sprintf("SELECT nome, procedimento, processo_um, vara FROM $foi");
        $dados = mysqli_query($con, $query) or die(mysql_error());
        $linha = mysqli_fetch_assoc($dados);
        $total = mysqli_num_rows($dados);
    ?>

    <?php
        // Exibir os dados dos processos, se houver algum
        if($total > 0) {
        do {
    ?>
            <button class = "accordion"><p> Ultima atualizacao do processo <?=$linha['nome']?></p> </button>
            <div class="panel">
                <p>Numero do Processo: <?=$linha['processo_um']?></p>
                <p>Vara: <?=$linha['vara']?> </p>
                <p>Atualizacao: <?=$linha['procedimento']?></p>
            </div>
    <?php
        }while($linha = mysqli_fetch_assoc($dados));
        }
    ?>
    </div>
    </body>
</html>
