<?php
/*
Queremos mudar o valor da variável $name, 
alterando a palavra “Treinamentos” por “Cursos”, 
que está na variável $replace.

*/

    $name = 'Hcode Treinamentos';
    
    $replace = 'Cursos';

    $new_name = substr($name, 0, strpos($name, 'T')). $replace;
    echo $new_name;

?>