<?php

namespace app\Builder;
class TrailerBuilder
{
    public $trailer;

    public function __construct($linha)
    {
//        $this->trailer->codigoRegistro = substr($linha, 0, 1);
        $this->trailer->campo1 = substr($linha, 323, 1);
//        $this->trailer->finalizador = substr($linha, 596, 4);

        return $this->trailer;
    }
}