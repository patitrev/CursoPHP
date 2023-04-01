<?php
//Implementar uma pilha em php.

class Pilha
{
    public $vetor;

    public function __construct()
    {
        $this->vetor = array();
    }
    public function push($item)
    {
        array_push($this->vetor, $eitem);
    }
    public function pop()
    {
        if (count($this->vetor)==0)
        {
            throw new Exeption("Pilha vazia.");
        }
        return array_pop($this->vetor);
    }
    public function isEmpty()
    {
        return count($this->vetor) == 0;
    }
}

