<?php

    $frase = "A repetição é mãe da retenção.";

    $q = strpos($frase, "mãe"); //Procura em "$frase"a palavra "mãe" e mostra a posição
    //var_dump($q);
 
    $texto = substr($frase, 0, $q); //Procura na frase desde a posição 0 até a palavra "mãe"

    var_dump($texto);

    echo"<br><br>";

    $texto2 = substr($frase, $q); //Procura na frase a partir da palavra mãe($q)
    var_dump($texto2);

    echo"<br><br>";
    echo"<br><br>";

 //////////////////////////////////////////////////////////////////////
    /* CÓDIGO DE FORMA DINÂMICA>*/

    $frase1 = "A repetição é a mãe da retenção.";

    $palavra = "mãe";

    $q1 = strpos($frase, $palavra);

    $texto3 = substr($frase, 0, $q1);

    var_dump($texto3);

    echo"<br><br>";

    $texto4 = substr($frase, $q1 + strlen($palavra), strlen($frase1));

    var_dump($texto4);

?>