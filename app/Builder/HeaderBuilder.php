<?php

namespace app\Builder;
class HeaderBuilder
{
    public $header;
    private $codigoRegistro;
    private $finalizador;
    private $campo1;


    public function __construct($linha)
    {
        $this->header->codigoRegistro = $this->setCodigoRegistro(substr($linha, 0, 1));
        $this->header->campo1 = $this->campo1(substr($linha, 60, 1));
        $this->header->finalizador = $this->Finalizador(substr($linha, 596, 4));

        return $this->header;
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

    private function Finalizador($finalizador)
    {
        $this->finalizador = $finalizador;
        return $this->finalizador;
    }
}