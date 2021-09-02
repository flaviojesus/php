<?php
//FUNÇÕES ANÔNIMAS
//NÃO TEM NOME NA FUNÇÃO E NÃO TEM RETURN

    function test($callback){

        //Processo lento

        $callback();
        
    }

    test(function(){

        echo "Terminou";

    });



?>