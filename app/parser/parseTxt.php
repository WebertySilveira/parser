<?php

namespace app\parser;
use app\Builder\HeaderBuilder;
use app\Builder\TrailerBuilder;
use app\Builder\TransacaoBuilder;

class parseTxt
{
    /**
     * @var HeaderBuilder
     */
    private $arquivo;

    public function __construct()
    {
        $this->parser();
    }

    public function parser()
    {
        $arquivo = file_get_contents('ARQUIVO.txt');
        $linhas = explode("\n", $arquivo);

        foreach ($linhas as $linha) {
            $registro = substr($linha, 0, 1);

            switch ($registro) {
                case 0:
                    $header = new HeaderBuilder($linha);
                    $this->montarArquivo($header);
                    break;
                case 1:
                    $transacao = new TransacaoBuilder($linha);
                    $this->montarArquivo($transacao);
                    break;
                case 9:
                    $trailer = new TrailerBuilder($linha);
                    $this->montarArquivo($trailer);
                    break;
            }
        }
    }

    public function montarArquivo($registro)
    {
        foreach ($registro as $campos) {
            foreach ($campos as $campo) {
                $this->arquivo .= $campo;
            }
        }
    }

    public function getArquivo()
    {
        return $this->arquivo;
    }
}