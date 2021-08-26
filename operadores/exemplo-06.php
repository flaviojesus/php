<?php

    $a = NULL;

    $b = NULL;

    $c = 10;

    //Se $a for NULL, verifica se $b é NULL, verifica $c (para no primeiro que não for NULL)
    echo $a ?? $b ?? $c;


?>