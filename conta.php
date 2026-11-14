<?php
    session_start();

    $_SESSION["login"] = $_POST["login"]; //whats this ???
    $_SESSION["senha"] = $_POST["senha"]; // i am goku 

?>



<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php

        $server = "localhost";
        $login = $_SESSION["login"];
        $senha = $_SESSION["senha"];
        $banco = "meusite"

        $conexao = mysqli_connect($server, $nome, $senha, $banco);

        if (!$conexao){
            echo "<h1>Erro de conexão</h1><p>Clique <a href="./index.php">aqui</a> para voltar para a página principal.</p>";
            return;
        }

        $sql = "SELECT login, data_lancamento, gerenciador_sistemas, ambiente_desktop, arquiteturas, recomendacao_uso, requisitos_hardware, nivel_dificuldade
                FROM usuarios";

        $res = mysqli_querry($conexao, $sql);

        ?>

        <form method="post">
            Gerenciador de sistemas: <input type="text" name="gerenciador_sistemas"></input><br/>
            Ambientes de desktop: <input type="text" name="ambiente_desktop"></input><br/>
            Arquiteturas de software: <input type="text" name="arquiteturas"></input><br/>
            Recomendação de uso: <input type="text" name="recomendacao_uso"></input><br/>
            Requisitos de hardware: <input type="text" name="requisitos_hardware"></input><br/>
            Nível de dificuldade: <input type="text" name="nivel_dificuldade"></input><br/>
            <input type="submit"/>
        </form>
    </body>
</html>