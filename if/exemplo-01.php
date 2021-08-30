<?php
// ESTRUTURAS CONDICIONAIS IF, ELSEIF, ELSE

    $qualASuaIdade = 125;
    
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if($qualASuaIdade < $idadeCrianca){

        echo "É uma Criança";

    } elseif ($qualASuaIdade < $idadeMaior){

        echo "É um Adolescente";

    } elseif ($qualASuaIdade < $idadeMelhor){
        
        echo "É um Adulto";

    } else{

        echo "É um idoso";

    }

    echo "<br>";
//OPERADOR TERNÁRIO então(?), senão(:)
    echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade" : "Maior de Idade";

?>