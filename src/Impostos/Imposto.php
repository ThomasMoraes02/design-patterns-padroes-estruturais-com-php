<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    private $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento)
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->rerealizaCalculoDeOutroImposto($orcamento);
    }

    public function rerealizaCalculoDeOutroImposto(Orcamento $orcamento)
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento); 
    }
}