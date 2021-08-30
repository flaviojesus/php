<?php

//Valor de $i; condição; incremento
    for ($i = 0; $i < 1000; $i += 5){

        if ($i > 200 && $i < 800) continue; //Não vai mostrar (de 201 a 799) 

        if ($i === 900) break; //Para no 900

        echo $i . "<br>";

    }


?>