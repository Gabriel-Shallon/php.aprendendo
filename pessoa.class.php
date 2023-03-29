<?php

class Pessoa{

    protected $nome;
    protected $idade;

    public function __construct($nome, $idade){

        $this->nome = $nome;
        $this->idade = $idade;
        
    }

    public function getnome(){
        return $this->nome;
    }
    public function setnome($nome){
        $this->nome = $nome;
    }
    public function getidade(){
        return $this->idade;
    }
    public function setidade($idade){
        $this->idade = $idade;
    }



    public function cadastrar($nome, $idade){

        $this->nome = $nome;
        $this->idade = $idade;

        echo("nome: ".$nome."<br> Idade: ".$idade);

    }


}

?>