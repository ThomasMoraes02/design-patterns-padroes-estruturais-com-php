<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\Relatorio\ArquivoZipExportado;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;

require_once("vendor/autoload.php");

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);

// $orcamentoExportadoEmXml = new ArquivoXmlExportado("orcamento");
// echo $orcamentoExportadoEmXml->salvar($orcamentoExportado);

$orcamentoExportadoEmZip = new ArquivoZipExportado("orcamento.array");
echo $orcamentoExportadoEmZip->salvar($orcamentoExportado);