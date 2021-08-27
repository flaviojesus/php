<?php

    $nome = "joao rangel";

    $nome = strtoupper($nome); //Converte para maiúscula
    echo $nome;

    echo "<br><br>";

    $nome = strtolower($nome);
    echo $nome;

    echo "<br><br>";

    echo ucwords($nome); //Converte a 1º letra de cada palavra em maiúscula

    echo"<br><br>";

    echo ucfirst($nome); //Converte a 1º letra da primeira palavra em maiúscula

?>