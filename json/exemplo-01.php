<?php
//json_encode - transforma um array em json

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

    echo json_encode($pessoas); //converte para json


?>