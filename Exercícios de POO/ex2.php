<?php
/*Classe ContaBancaria

    Crie uma classe chamada "ContaBancaria" com propriedades "saldo" e métodos "depositar" e "sacar".  Verifique se o valor a ser sacado é menor ou igual ao saldo antes de realizar o saque.

Adicione mais métodos e propriedades que você acha necessário.*/

class ContaBancaria
{
    public $titular;
    private $cpf;
    private $saldo;
    private $extrato;

    public function __construct($nome,$cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = 0;
        $this->extrato = array();
    }
    public function depositar($valor)
    {
        array_push($extrato, array_push(new Operacao($this->saldo,$valor,"Deposito")));
        $this->saldo += $valor;
    }
    public function sacar($valor)
    {
        if ($saldo < $valor)
        {
            throw new Exeption("Saldo insuficiente");
        }
        array_push($extrato, array_push(new Operacao($this->saldo,-$valor,"Saque")));
        $this->saldo -= $valor;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function mostrarExtrato()
    {
        if(count($this->extrato)>0)
        {
            foreach ($this->extrato as $item)
            {
                $item->imprime();
            }
        }
        echo "Saldo:" . $this->saldo . "\n";
    }

}

class Operacao
{
    private $saldoAnterior;
    private $dataHora;
    private $valor;
    private $tipoOperacao;

    public function __construct($saldo,$valor,$tipo)
    {
        $this->saldoAnterior = $saldo;
        $this->dataHora = date("Y-m-d H:i:s");
        $this->valor = $valor;
        $this->tipoOperacao = $tipo;
    }
    public function imprime()
    {
        echo "Saldo:".$this->saldoAnterior ."\n" . $this->dataHora . "\n". $this->tipoOperacao . "\t" . $this->valor . "\n";
    }
}