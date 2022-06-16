<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\OrcamentoEmZip;

require_once("vendor/autoload.php");

$orcamentoZip = new OrcamentoEmZip();
$orcamento = new Orcamento();
$orcamento->valor = 500;


$orcamentoZip->exportar($orcamento);

