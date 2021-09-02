<?php
//ARRAY_PUSH insere itens dentro do array

    $pessoas = array();

    array_push($pessoas, array(

        'nome' => 'João',
        'idade' => 20,
        'sexo' => 'Masculino'

    ));
    
    array_push($pessoas, array(

        'nome' => 'Joaquim',
        'idade' => 25,
        'sexo' => 'Masculino'
    ));
    
    print_r($pessoas[0]['nome']);

    
    echo"<br>";
    echo"<br>";

/* OUTRA FORMA DE INSERIR ITENS DENTRO DO ARRAY */

    $cesta = array("laranja", "morango","goiaba");
    array_push ($cesta,"melancia","batata");
    print_r($cesta);

?>