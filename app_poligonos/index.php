<?php

require __DIR__ . '/vendor/autoload.php';

use src\Poligono;
use src\poligonos\Retangulo;
use src\poligonos\Quadrado;

$poligono = new Poligono();
$poligono->setForma(new Retangulo);
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo '<h3>Área do retângulo: ' . $poligono->getArea() . '</h3>';


$poligono = new Poligono();
$poligono->setForma(new Quadrado);
$poligono->getForma()->setLargura(10);

echo '<h3>Área do quadrado: ' . $poligono->getArea() . '</h3>';