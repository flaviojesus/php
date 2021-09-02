<?php

    $pessoa = array(
        'nome'=>'João',
        'idade'=>20
    );

    foreach ($pessoa as &$value) { //Sem o & o valor continua 20
        if(gettype($value) === 'integer') $value += 10;
        echo $value.'<br>';
    }

    print_r($pessoa);

?>