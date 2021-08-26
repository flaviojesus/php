<?php
/* ESCOPO DE VARIÁVEIS */
    $nome = "Glaucio";

    function teste(){
        global $nome; //informa que a variável é global (já declarada fora da função)
        echo $nome;
    }

    function teste2(){
        $nome = "João";
        echo $nome."<br> agora no teste2";
    }

    teste();
    teste2();

?>