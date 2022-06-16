<?php
namespace Alura\DesignPattern\Relatorio;

use SimpleXMLElement;
use Alura\DesignPattern\Relatorio\ArquivoExportado;
use Alura\DesignPattern\Relatorio\ConteudoExportado;

class ArquivoZipExportado implements ArquivoExportado
{
    private $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $arquivoZip = new \ZipArchive();
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado->conteudo()));
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}