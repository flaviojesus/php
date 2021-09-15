<?php

    // echo strtotime("2001-09-11");
    // $ts = strtotime("2001-09-11");
    // $ts = strtotime("now");//Mostra data atual
    // $ts = strtotime("+1 day");//Acrescenta um dia a data atual
    $ts = strtotime("+1 week");//Acrescenta um dia a data atual
    echo date("l, d/m/Y", $ts); //"l" dia da semana


?>