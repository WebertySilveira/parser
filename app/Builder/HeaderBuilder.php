<?php

namespace app\Builder;
class HeaderBuilder
{
    public $header;

    public function __construct($linha)
    {
//        $this->header->codigoRegistro = substr($linha, 0, 1);
        $this->header->campo1 = substr($linha, 60, 1);
//        $this->header->finalizador = substr($linha, 596, 4);

        return $this->header;
    }
}