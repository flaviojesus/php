<?php
    /*
    $anoNascimento = 1990;
    $nomeCompleto = "Fulano de Tal";
    */
    $nome1 = "Fulano";

    $sobrenome = "de Tal";

    $nomeCompleto = $nome1 ." ". $sobrenome;
    echo $nomeCompleto;
    exit;

    echo $nome1;
    
    echo "<br/>";
    
    unset($nome1);
    
    if(isset($nome1)){
        echo $nome1;
    }else{
        echo "Não existe";
    }

?>