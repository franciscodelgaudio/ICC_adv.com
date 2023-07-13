<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cliente.css">
    <style>
        .accordion {
            position: relative;
            cursor: pointer;
            padding: 18px;
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

        .active, .accordion:hover {
            background-color: rgb(33, 100, 198); 
        }

        .accordion:after {
            content: '\002B';
            color: white;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .nome {
            text-align: center;
            font-family: sans-serif;
            font-size: 20px;
            text-transform: uppercase;
            font-weight:bold;
            padding: 20px 0;
        }
    
        @font-face{
            font-family: 'caxo';
            src: url('fontes/Caxo.otf') format('truetype');
        }

        .bloco{
            margin: 30px 0;
            background-color: white;
            text-align: center;
        }

        .login{
            height: 40px;
            width: 275px;
            margin-bottom: 15px;
            padding: 0 0 0 10px;
            font-size: 20px;
            border:none;
            border-bottom: 2px solid black;
            background-color: rgb(231, 229, 229);
            border-radius: 5px;
            font-size: 15px;
        }

        .login:focus{
            border: none;
        }

        .senha:focus{
            border:none;
        }

        select{
            text-align: center;
            height: 40px;
            width: 280px;
            margin-bottom: 15px;
            padding: 0 0 0 10px;
            font-size: 20px;
            border:none;
            border-bottom: 3px solid black;
            background-color: rgb(232, 229, 229);
            border-radius: 5px;
            font-size: 15px;
        }

        .senha{
            height: 40px;
            width: 275px;
            padding: 0;
            font-size: 20px;
            padding: 0 0 0 10px;
            border:none;
            border-bottom: 2px solid black;
            background-color: rgb(231, 229, 229);
            border-radius: 5px;
            font-size: 15px;
        }

        .button{
            padding: 10px 15px;
            text-align: center;
            background-color: rgb(36, 160, 190);
            color:white;
            border:none;
            box-shadow: 0px 2px 3px 1px #888888;
            border-radius: 5px;
            letter-spacing: 1px;
            margin-top: 30px;
            font-weight: bold;
            font-size: 15px;
            font-family: sans-serif;
        }

        .button:hover{
            background-color: rgb(24, 107, 128);
            cursor:pointer;
        }
    </style>
<body>
    <button class="accordion">CADASTRO</button>
    <div class="panel">
            <form method="POST" action="cadastro.php">
                <div class="bloco">
                    <div class="caixa">
                        <input type="text" name="login" class="login" placeholder="login"><br>
                    </div>
                    <div class="caixa_um">
                        <input type="password" name="senha" class="senha" placeholder="senha"><br>
                    </div>
                    <input class="button" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </div>
            </form>
    </div>

    <button class="accordion">INCLUIR</button>
    <?php
        $usuario = 'root';
        $senha_bd = '';
        $database = 'tres_cadastro';
        $host = 'localhost';

        $mysqli = new mysqli($host, $usuario, $senha_bd, $database);

        $query = "SHOW TABLES";
        $result = mysqli_query($mysqli, $query);

        $tabelas = array();

        while ($row = mysqli_fetch_row($result)) {
            $tabelas[] = $row[0];
        }
    ?>
    <div class="panel">
            <form method="POST" action="incluir.php">
                <div class="bloco">
                    <div class="caixa">
                        <select name="tabela" class="login">
                            <?php
                            foreach ($tabelas as $tabela) {
                                echo '<option value="' . $tabela . '">' . $tabela . '</option>';
                            }
                            ?>
                        </select>
                        <br>
                    </div>
                    <div class="caixa">
                        <input name="nome" class="login" placeholder="Nome"><br>
                    </div>
                    <div class="caixa">
                        <input name="procedimento" class="login" placeholder="Procedimento"><br>
                    </div>
                    <div class="caixa">
                        <input name="processo_um" class="login" placeholder="Numero do Processo"><br>
                    </div>
                    <div class="caixa">
                        <input name="vara" class="login" placeholder="Vara"><br>
                    </div>
                    <input class="button" type="submit" value="Enviar" id="enviar" name="enviar">
                </div>
            </form>
    </div>
    
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>
</html>