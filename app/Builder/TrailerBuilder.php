<?php

namespace app\Builder;
class TrailerBuilder
{
    public $trailer;
    private $codigoRegistro;
    private $finalizador;
    private $campo1;


    public function __construct($linha)
    {
        $this->trailer->codigoRegistro = $this->setCodigoRegistro(substr($linha, 0, 1));
        $this->trailer->campo1 = $this->campo1(substr($linha, 323, 1));
        $this->trailer->finalizador = $this->Finalizador(substr($linha, 596, 4));

        return $this->trailer;
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