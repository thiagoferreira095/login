<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $name_db = "sistemalogin";

    $conexao = mysqli_connect($hostname, $username, $password, $name_db);
    $mensagemErro = array();

    if(mysqli_connect_error()):
        $mensagemErro[] = "Falha na conexão: "."{ CODE ERROR: ".mysqli_connect_errno()." }".mysqli_connect_error();
        if(!empty($mensagemErro)):
            foreach($mensagemErro as $msgErro):
                echo "<li>'$msgErro'</li>";
            endforeach;
        endif;
    endif;    
?>