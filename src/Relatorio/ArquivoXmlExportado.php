<?php
namespace Alura\DesignPattern\Relatorio;

use SimpleXMLElement;
use Alura\DesignPattern\Relatorio\ArquivoExportado;
use Alura\DesignPattern\Relatorio\ConteudoExportado;

class ArquivoXmlExportado implements ArquivoExportado
{
    private $nomeElementoPai;

    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new SimpleXMLElement("<{$this->nomeElementoPai}/>");

        foreach($conteudoExportado as $conteudo) {
            $elementoXml->addChild('item', $conteudo);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo;
    }
}