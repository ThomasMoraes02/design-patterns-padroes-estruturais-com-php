<?php 
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Icms;

class IcmsComIss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return (new Icms())->calculaImposto($orcamento) + (new Iss())->calculaImposto($orcamento);
    }
}