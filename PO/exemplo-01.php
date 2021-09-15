<?php
//CRIANDO UMA CLASSE
 class Pessoa{

    public $nome; //Atributo

    public function falar(){//Método

        return "O meu nome".$this->nome; 
        //$this variável interna do PHP, serve para referenciar atributos e métodos no PHP.
        //$this é a classe já instanciada
        //"$this->nome" para referenciar atributo/metodo dentro do método
    }

 }

 $glaucio = new Pessoa();
 $glaucio->nome = "Glaucio Daniel";
 echo $glaucio->falar();

?>