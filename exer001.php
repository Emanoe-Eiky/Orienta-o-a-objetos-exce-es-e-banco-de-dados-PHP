<?php

declare (strict_types=1);
 
class dadosVendas{
    /**
     * @var string
     */
    private $data;
    /**
     * @var string 
     */
    private $produtor;
    /**
     * @var float 
     */
    private $quantidade;

    public function __construct(
        string $data,
        string $produtor,
        float $quantidade
        )
    {
        $this->data = $data;
        $this->produtor = $produtor;
        $this->quantidade = $quantidade;
    }


}
 
$vendas = new dadosVendas(
    '01-03-2021',
    'ventilador',
    34
);
 
var_dump($vendas);