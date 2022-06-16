<?php 
namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use HttpAdapter;
use Alura\DesignPattern\Orcamento;
use DomainException;

class RegistroOrcamento
{
    private $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if(!$orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException('Apenas orçamentos finalizados podem ser registrados na Api');
        }
        
        $this->http->post('http://api.registrar.orcamento', [$orcamento->estadoAtual, $orcamento->valor, $orcamento->quantidadeItens]);
    }
}