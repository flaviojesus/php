<?php

/* Por padrão deve-se iniciar toda vez, e para não ter que fazer isso em todos os arquivos
manualmente, foi criado o arquivo config.php que inicia a sessão e inserido com REQUIRE_ONCE*/

    //session_start();
    require_once("config.php");

    session_unset($_SESSION['nome']); //limpa a variável de sessão

    echo $_SESSION['nome'];
    session_destroy(); //limpa e remove o usuário

?>