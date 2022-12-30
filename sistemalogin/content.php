<body>
    <fieldset>
        <legend>Tela de Login</legend>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
            <label for="password">Senha:</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" name="usuario_entrar" value="Entrar">
        </form>
    </fieldset>
    <?php
        require_once("script.php");

        if(!empty($err)):
            foreach($err as $error):
                echo $error;
            endforeach;
        endif;
        
        if(!empty($success)):
            foreach($success as $mensagem_sucess):
                echo $mensagem_sucess;
            endforeach;
        endif;
    ?>
</body>