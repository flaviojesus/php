<?php
//json_decode - transforma o json em um array
    $json = '[{"nome":"Jo\u00e3o","idade":20,"sexo":"Masculino"},{"nome":"Joaquim","idade":25,"sexo":"Masculino"}]';
    $data = json_decode($json, true);//true não mostra o object

    var_dump($data);

?>