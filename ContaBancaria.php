<?php

class ContaBancaria
{ 
    // private  public  modificadores de acesso
    public $banco;
    public $nomeTitular;
    public $numeroAgencia;
    public $numeroConta;
    public $saldo;
}

$conta = new ContaBancaria();
var_dump($conta->nomeTitular);
// var_dump($conta);