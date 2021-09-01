<?php
//PARÂMETROS DE FUNÇÃO

    function ola($texto, $periodo = "Bom dia!"){ //PARÂMETROS que não tem valor padrão sempre a esquerda

        return "Olá $texto! $periodo! <br>";
    }

    echo ola("Obrigatório");//Não foi passado o 1º parâmetro (está a direita)
    echo ola("", "Boa noite");
    echo ola("Glaúcio", "Boa tarde");
    echo ola("João", "");


?>