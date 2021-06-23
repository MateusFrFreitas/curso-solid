<?php

require __DIR__ . '/vendor/autoload.php';

use src\Leitor;

$leitorTXT = new Leitor();

$leitorTXT->setDiretorio(__DIR__ . '\arquivos');
$leitorTXT->setArquivo('dados.txt');

$arrayTXT = $leitorTXT->lerArquivo();

$leitorCSV = new Leitor();

$leitorCSV->setDiretorio(__DIR__ . '\arquivos');
$leitorCSV->setArquivo('dados.csv');

$arrayCSV = $leitorCSV->lerArquivo();

echo '<pre>';
print_r(array_merge($arrayTXT, $arrayCSV));
echo '</pre>';

$leitorXLSX = new Leitor();

$leitorXLSX->setDiretorio(__DIR__ . '\arquivos');
$leitorXLSX->setArquivo('dados.xlsx');

$arrayXLSX = $leitorXLSX->lerArquivo();

echo '<pre>';
print_r(array_merge($arrayTXT, $arrayCSV, $arrayXLSX));
echo '</pre>';