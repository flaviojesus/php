<?php
//DO WHILE (executa pelo menos uma vez mesmo a condição sendo falsa)
// Se usar com números precisa colocar um contador, se não vira um looping infinito

    $total = 150;
    $desconto = 0.9;

    do{

        $total *= $desconto; //total é igual a ele mesmo vezes o desconto

    } while ($total > 100);

    echo $total;

?>