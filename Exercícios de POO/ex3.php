<?php
/*Crie uma classe "Funcionario" que herda da classe "Pessoa" e adicione uma propriedade "salario". 
Instancie um objeto da classe "Funcionario" e atribua valores às propriedades.

Adicione mais métodos e propriedades que você acha necessário.*/

class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $cpf;

    protected function __construct($nome,$idade,$sexo,$cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
    }

}
class Funcionario extends Pessoa
{
    private $salario;
    private $cargaHoraria;
    private $bancoHoras;
    private $historicoSalarial;
    
    public function __construct($nome,$idade,$sexo,$cpf,$salario,$cargaHoraria)
    {
        parent::__construct($nome,$idade,$sexo,$cpf);
        $this->salario = $salario;
        $this->cargaHoraria = $cargaHoraria;
        $this->bancoHoras = 0;
        $this->historicoSalarial = array($salario);
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($novo)
    {
        $this->salario = $novo;
        arrya_push($this->historicoSalarial, $novo);
    }
    public function pagarComExtras()
    {
        $total = $this->salario + $this->bancoHoras * 1.5 * ($this->salario / $this->cargaHoraria);
        return $total;
    }

}