<?php

namespace app\parser;
use app\Builder\HeaderBuilder;
use app\Builder\TrailerBuilder;
use app\Builder\TransacaoBuilder;

class parseTxt
{

    public function parser()
    {
        $arquivo = file_get_contents('ARQUIVO.txt');
        $linhas = explode("\n", $arquivo);

        foreach ($linhas as $linha) {
            $registro = substr($linha, 0, 1);

            switch ($registro) {
                case 0:
                    $this->header($linha);
                    break;
                case 1:
                    $this->transacao($linha);
                    break;
                case 9:
                    $this->trailer($linha);
                    break;
            }
        }
    }

    // 0
    public function header($linha){
        $registro = new HeaderBuilder($linha);
    }

    // 1
    public function transacao($linha){
        $registro = new TransacaoBuilder($linha);
    }

    //9
    public function trailer($linha){
        $registro = new TrailerBuilder($linha);
    }
}