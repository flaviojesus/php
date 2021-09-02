<?php
//PARÂMETROS DE VALOR x REFERÊNCIA DE MEMÓRIA

    $a = 10;

    function trocaValor(&$b){ //(&) dentro da função é passagem por REFERÊNCIA

        $b += 50;

        return $b;
    }

    echo trocaValor($a);
    echo "<br>";
    echo trocaValor($a);
    echo "<br>";

    echo $a; //Variável fora da função



?>