<?php

namespace app\Builder;
class TransacaoBuilder
{
    public $transacao;

    public function __construct($linha)
    {
//        $this->transacao->codigoRegistro = substr($linha, 0, 1);
        $this->transacao->campo1 = substr($linha, 156, 1);
        $this->transacao->campo2 = substr($linha, 554, 1);
        $this->transacao->campo3 = substr($linha, 488, 1);
        $this->transacao->campo4 = substr($linha, 408, 1);
        $this->transacao->campo5 = substr($linha, 248, 1);
        $this->transacao->campo6 = substr($linha, 9, 1);
        $this->transacao->campo7 = substr($linha, 585, 1);
        $this->transacao->campo8 = substr($linha, 38, 1);
        $this->transacao->campo9 = substr($linha, 116, 1);
        $this->transacao->campo10 = substr($linha, 153, 1);
        $this->transacao->campo11 = substr($linha, 136, 1);
        $this->transacao->campo12 = substr($linha, 68, 1);
        $this->transacao->campo13 = substr($linha, 89, 1);
        $this->transacao->campo14 = substr($linha, 19, 1);
        $this->transacao->campo15 = substr($linha, 22, 1);
        $this->transacao->campo16 = substr($linha, 569, 1);
        $this->transacao->campo17 = substr($linha, 37, 1);
        $this->transacao->campo18 = substr($linha, 79, 1);
        $this->transacao->campo19 = substr($linha, 549, 1);
        $this->transacao->campo20 = substr($linha, 92, 1);
        $this->transacao->campo21 = substr($linha, 35, 1);
        $this->transacao->campo22 = substr($linha, 240, 1);
        $this->transacao->campo23 = substr($linha, 149, 1);
        $this->transacao->campo24 = substr($linha, 323, 1);
        $this->transacao->campo25 = substr($linha, 52, 1);
        $this->transacao->campo26 = substr($linha, 204, 1);
        $this->transacao->campo27 = substr($linha, 109, 1);
        $this->transacao->campo28 = substr($linha, 323, 1);
//        $this->transacao->finalizador = substr($linha, 596, 4);

        return $this->transacao;
    }
}