<?php

require_once "vendor/autoload.php";

$parse = new app\parser\parseTxt();

echo $parse->getArquivo();