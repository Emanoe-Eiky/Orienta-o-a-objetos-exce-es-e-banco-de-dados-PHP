<?php

declare(strict_types=1);

class ContaBancaria
{ 
    // private - public - protected => modificadores de acesso
    /**
     * @var string 
     */
    private $banco ;
    /**
     * @var string 
     */
    private $nomeTitular;
    /**
     * @var string
     */
    private $numeroAgencia;
    /**
     * @var string
     */
    private $numeroConta;
    /**
     * @var float 
     */
    private $saldo;

    public function __construct(
        string $banco,
        string  $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular =$nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        
    }

    public function obterSaldo(){ //método
        return 'seu saldo atual é '. $this->saldo;
    }

    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;
        return 'Deposito de ' .$valor. 'realizado!';
    }

    public function sacar(float $valor) : string
    {
        $this->saldo -= $valor;
        return 'Seu saque de ' .$valor . 'realizado!';
    }
}

$conta1 = new ContaBancaria(
    'Banco do Brasil',
    'Gustavo Fraga',
    '2345',
    '2233444-22',
    0
); 
var_dump($conta1);
$conta2 = new ContaBancaria(
    'caixa economica',
    'João Marcos',
    '2222',
    '26453',
    0
);//criou um objetos

var_dump($conta2);

// echo $conta->obterSaldo(); // = 0
// // var_dump($conta);
// echo PHP_EOL;
// $conta->depositar(400.00);

// echo PHP_EOL;

// echo $conta->obterSaldo();

// echo PHP_EOL;

// $conta->sacar(100.00);

// echo PHP_EOL;

// echo $conta->obterSaldo();


