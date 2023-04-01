<?php
/*Crie uma classe chamada "Carro" com as propriedades privadas "marca", "modelo", "ano" e "velocidadeAtual". Implemente métodos públicos para obter e definir os valores dessas propriedades, bem como um método para acelerar o carro.

Adicione mais métodos e propriedades que você acha necessário.*/

class Carro
{
    private $marca;
    private $modelo;
    private $ano;
    private $placa;
    private $velocidadeAtual;

    public function getMarca()
    {
        return $this->marca;
    }
    public function getMOdelo()
    {
        return $this->modelo;
    }
    public function etAno()
    {
        return $this->ano;
    }
    public function getPLaca()
    {
        return $this->placa;
    }
    public function getVelocidadeAtual()
    {
        return $this->velocidadeAtual;
    }
    public function acelera($a,$tempo)
    {
        $this->velocidadeAtual += $a * $tempo;
    }

}
