<?php

namespace app\Builder;
class TransacaoBuilder
{
    public $transacao;
    private $codigoRegistro;
    private $finalizador;
    private $campo1;


    public function __construct($linha)
    {
        $this->transacao->codigoRegistro = $this->setCodigoRegistro(substr($linha, 0, 1));
        $this->transacao->campo1 = $this->campo1(substr($linha, 156, 1));
        $this->transacao->campo1 = $this->campo2(substr($linha, 554, 1));
        $this->transacao->finalizador = $this->Finalizador(substr($linha, 596, 4));

        return $this->transacao;
    }

    private function setCodigoRegistro($codigoRegistro)
    {
        $this->codigoRegistro = $codigoRegistro;
        return $this->codigoRegistro;
    }

    private function campo1($campo1)
    {
        $this->campo1 = $campo1;
        return $this->campo1;
    }

    private function campo2($campo1)
    {
        $this->campo1 = $campo1;
        return $this->campo1;
    }

    private function Finalizador($finalizador)
    {
        $this->finalizador = $finalizador;
        return $this->finalizador;
    }
}