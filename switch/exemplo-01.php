<?php

//SWITCH série de declarações IF (Estrutura Condicional)

     $diaDaSemana = date("w");
    //$diaDaSemana = 8;

    switch ($diaDaSemana){

        case 0;
        echo "Domingo";
        break; //Finaliza a execução do switch

        case 1;
        echo "Segunda-feira";
        break;

        case 2;
        echo "Terça-feira";
        break;

        case 3;
        echo "Quarta-feira";
        break;

        case 4;
        echo "Quinta-feira";
        break;

        case 5;
        echo "Sexta-feira";
        break;

        case 6;
        echo "Sábado";
        break;

        default;
        echo "Data inválida"; //CASO não atenda nenhuma condição o valor "default" será retornado (exemplo se o valor passado fosse 8)

    }


?>