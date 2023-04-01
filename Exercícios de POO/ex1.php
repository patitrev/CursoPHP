<?php
/*Crie uma classe chamada "Pessoa" com as propriedades "nome", "idade" e "sexo". 
Em seguida, instancie dois objetos dessa classe e atribua valores apropriados às propriedades.

Adicione mais métodos e propriedades que você acha necessário.*/

class Pessoa
{
    public $nome;
    public $idade;
    public $sexo;
    public $profissao;
    public $movimento;

    public function __construct($nome, $idade, $sexo, $profissao) 
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->profissao = $profissao;
        $this->movimento = "parado";
    }
    public function andar()
    {
        $this->movimento = "andando";
    }
    public function correr()
    {
        $this->movimento = "correndo";
    }
    public function parar()
    {
        $this->movimento = "parado";
    }
}

$obj1 = new Pessoa("Patrícia", 27,"F","DEV");
$obj2 = new Pessoa("Thiago", 28,"M","Massoterapeuta");