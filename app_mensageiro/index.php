<?php

require __DIR__ . '/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\Whatsapp;

echo '<pre>';

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '</br>';

$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

echo '</br>';

$msg2 = new Mensageiro(new Whatsapp());
$msg2->enviarToken();

/*
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '</br>';

$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
*/

echo '</pre>';
