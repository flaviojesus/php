<?php
    /* Variáveis Pré-definidas (array super globais)*/
    // (int) converte o valor de "a" para inteiro
    $nome = (int)$_GET["a"]; //$_GET é um array super global
    //var_dump($nome);

    //Pegar o ip do usuário
    //$ip = $_SERVER["REMOTE_ADDR"];
    //echo($ip);

    //Pegar o log
    $ip = $_SERVER["SCRIPT_NAME"];
    echo($ip);

?>