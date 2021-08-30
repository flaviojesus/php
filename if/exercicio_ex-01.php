<?php

    $salario = 3101;
    $faixa1 =  (7 / 100 * $salario);
    $soma_SalarioFamilia1 = $faixa1 + $salario;

    $faixa2 =  (9 / 100 * $salario);
    $soma_SalarioFamilia2 = $faixa2 + $salario;
   
    $faixa3 =  (12 / 100 * $salario);
    $soma_SalarioFamilia3 = $faixa3 + $salario;

    $faixa4 =  (14 / 100 * $salario);
    $soma_SalarioFamilia4 = $faixa4 + $salario;


    if($salario <= 1100){

        echo "O valor do salário família a ser acrescido é: R$".$faixa1;
        echo "<br>";
        echo "O valor do salário a receber é: R$".$soma_SalarioFamilia1;
        echo "<br>";
        echo "Seu salário é até R$1.100,00"; 
    
    }elseif ($salario >= 1101 && $salario <=2100){

        echo "O valor do salário família a ser acrescido é: R$".$faixa2;
        echo "<br>";
        echo"O valor do salário a receber é: R$".$soma_SalarioFamilia2;
        echo "<br>";
        echo "Seu salário é de R$1.101,00 até R$2.100,00";

    }elseif ($salario >=2101 && $salario <=3100){

        echo "O valor do salário família a ser acrescido é: R$".$faixa3;
        echo"<br>";
        echo"O valor do salário a receber é: R$". $soma_SalarioFamilia3;
        echo "<br>";
        echo "Seu salário é de R$3.100,00 até R$3.100,00";

    }else{

        echo "O valor do salário família a ser acrescido é: R$".$faixa4;
        echo"<br>";
        echo"O valor do salário a receber é: R$". $soma_SalarioFamilia4;
        echo "<br>";
        echo "Seu salário é acima de R$3.101,00";

    }

?>