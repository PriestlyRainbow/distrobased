<?php
   
   session_start();

    mysqli_report(MYSQLI_REPORT_OFF);

    $server     = "localhost";
    $usuario_db = "root";
    $senha_db   = "";
    $banco      = "meusite";

    $conexao = mysqli_connect($server, $usuario_db, $senha_db, $banco);

    if (!$conexao) {
        echo "<h1>Erro de conexão</h1><p>Clique <a href='./index.php'>aqui</a> para voltar para a página principal.</p>";
        exit;
    }

    mysqli_set_charset($conexao, "utf8mb4");

    $msg = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style = "text-align: center;">Fazer cadastro/login</h1>
    <form method="post" action="conta.php">
        Login: <input type="text" name="distro"><br>
        Senha: <input type="text" name="senha"><br>
        <input type="submit">
    </form>
</body>
</html>