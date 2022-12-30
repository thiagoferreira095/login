<?php
    require_once("connect_db.php");

    session_start();

    if(isset($_POST["usuario_entrar"])):
        $err = array();
        $success = array();
        $email = mysqli_escape_string($conexao, $_POST["email"]);
        $senha = mysqli_escape_string($conexao, $_POST["senha"]);
        if(empty($email) or empty($senha)):
            $err[] = "<li>Preencha os campos vázios.</li>";
        else:
            $senha = md5($senha);
            $sql_email_senha = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $resultado = mysqli_query($conexao, $sql_email_senha);
            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['nome_usuario'] = $dados['nome'];
                header("Location: home.php");
            else:
                $err[] = "<li>E-mail digitado não existe!</li>";
            endif;
        endif;
    endif;
?>
