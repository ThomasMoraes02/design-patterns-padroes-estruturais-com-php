<?php 
namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Relatorio\ConteudoExportado;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}