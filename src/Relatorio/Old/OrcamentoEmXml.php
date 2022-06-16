<?php 
namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;
use SimpleXMLElement;

class OrcamentoEmXml
{
    public function exportar(Orcamento $orcamento): string
    {
        $elementoOrcamento = new SimpleXMLElement("<orcamento/>");
        $elementoOrcamento->addChild("valor", $orcamento->valor);
        $elementoOrcamento->addChild("quantidade_itens", $orcamento->itens);

        return $elementoOrcamento->asXML();
    }
}