<?php

    $resultado = 10 + 3 / 2; //prioridade a divisão
    echo $resultado;
    echo "<br>";
    echo "<br>";
    $resultadosoma = (10 + 3) / 2; //prioridade a soma()
    echo $resultadosoma;
    echo "<br>";
    echo "<br>";
    
    $resultado2 = 10 + 3 / 2 > 5 && 10 + 5 <20; //&& se as 2 condições forem verdade
    var_dump($resultado2);
    echo "<br>";
    echo "<br>";

    $resultado3 = 10 + 3 / 2 > 5 || 10 + 5 <20; //&& se pelo menos 1 é verdade
    var_dump($resultado3);
    echo "<br>";

?>