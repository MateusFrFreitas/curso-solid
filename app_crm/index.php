<?php

require __DIR__ . '\vendor\autoload.php';

use src\dao\ContratoModel;
use src\dao\LeadModel;
use src\dao\UsuarioModel;

echo '<pre>';

$contratoModel = new ContratoModel();
print_r($contratoModel);

$leadModel = new LeadModel();
print_r($leadModel);

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);

echo '</pre>';