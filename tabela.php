<?php
session_start();

mysqli_report(MYSQLI_REPORT_OFF);

$conexao = mysqli_connect("localhost", "root", "", "meusite");

//if (!$conexao) {
//    echo "<h1>Erro de conexão</h1><p>Clique <a href='./login.php'>aqui</a> para voltar.</p>";
//    exit;
//}

mysqli_set_charset($conexao, "utf8mb4");

$resultado = $conexao->query("SELECT login, recomendacao_uso FROM usuarios ORDER BY login");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Distros</title>
</head>
<body>
    <h1>Distros cadastradas</h1>

    <?php if ($resultado && $resultado->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>Nome da distro</th>
                <th>Uso recomendado</th>
            </tr>
            <?php while ($linha = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($linha["login"]) ?></td>
                    <td><?= htmlspecialchars($linha["recomendacao_uso"]) ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Nenhuma distro cadastrada ainda.</p>
    <?php endif; ?>

    <p><a href="login.php">Voltar para o login</a></p>
</body>
</html>