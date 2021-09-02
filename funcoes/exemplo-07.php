<?php
//FUNÇÕES NO PHP 7 NOVIDADES

function soma(int ...$valores) {//int ...$valores (todos os parâmetros serão inteiros)

    return array_sum($valores); //soma todos os valores do array
    
};

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2); //ignora o "." (somou 1 + 3)
echo "<br>";

?>