<?php
/*Crie uma interface chamada "FormaGeometrica" com os métodos "calcularArea" e "calcularPerimetro". Implemente essa interface em duas classes: "Retangulo" e "Circulo".

Adicione mais métodos e propriedades que você acha necessário.*/

interface FormaGeometrica
{
    public function calcularArea();
    public function calcularPerimetro();
}
class Retangulo implements FormaGeometrica
{
    public $largura;
    public $altura;

    public function calcularArea()
    {
        return $this->altura * $this->largura;
    }
    public function calcularPerimetro()
    {
        return 2 * $this->largura + 2 * $this->altura;
    }
}

class Circulo implements FormaGeometrica
{
    public $raio;
    public function calcularArea()
    {
        return $this->raio * $this->raio * 3.14;
    }
    public function calcularPerimetro()
    {
        return 2 * $this->raio * 3.14;
    }
}