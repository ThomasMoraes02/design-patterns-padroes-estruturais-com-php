<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;

class CacheOrcamentoProxy extends Orcamento
{
    private $valorCache = 0;
    private $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function addItem($item)
    {
        throw new \Exception('Não é possível adicionar itens a um orçamento via proxy');
    }

    public function valor():float
    {
        if($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}