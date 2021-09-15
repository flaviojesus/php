<?php
// new instancia um objeto/classe
    $dt = new DateTime(); //metodo

    $periodo = new DateInterval("P15D"); //representa um intervalo entre datas

    echo $dt->format("d/m/Y H:i:s");

    $dt->add($periodo);

    echo"<br><br>";

    echo $dt->format("d/m/Y H:i:s");

?>