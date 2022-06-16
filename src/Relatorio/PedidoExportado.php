<?php

use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Relatorio\ConteudoExportado;

class PedidoExportado implements ConteudoExportado
{
    private $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'dataFinalizacao' => $this->pedido->dataFinalizacao->format("d/m/Y"),
            'nomeCliente' => $this->pedido->nomeCliente,
        ];
    }
}