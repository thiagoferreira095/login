<?php
    require_once("script.php");

    if(!isset($_SESSION['logado'])):
        header("Location: index.php");
    endif;

    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);
?>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Home - Principal</title>
    </head>

    <body>
        <h1>
            <?php
                echo $dados['senha'];
            ?>
        </h1>
        <a href="logout.php">Sair</a>
    </body>
</html>