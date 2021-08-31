<?php
// WHILE (faça enquanto), muito utilizado para pegar dados no banco de dados

    $condicao = true;

    while ($condicao){

        $numero = rand(1, 10); //rand(função para sortear numero)

        if($numero === 3){

            echo "TRÊS!!";
            $condicao = false;
        }

        echo $numero . " ";

    }


?>