<?php
/*Crie uma classe abstrata chamada "Animal" com um método abstrato "emitirSom". 
Implemente essa classe abstrata em duas classes: "Cachorro" e "Gato". Ambas as classes devem sobrescrever o método "emitirSom" para exibir um som específico.

Adicione mais métodos e propriedades que você acha necessário. */

abstract class Animal
{
    public $nome;
    abstract function emitirSom();
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Gato extends Animal
{
    public function __construct($nome)
    {
        parent::__construct($nome);
    }
    public function emitirSom()
    {
        echo "miau\n";
    }
}
class Cachorro extends Animal
{
    public function __construct($nome)
    {
        parent::__construct($nome);
    }
    public function emitirSom()
    {
        echo "au au\n";
    }
}


