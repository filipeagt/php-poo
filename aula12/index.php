<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 POO</title>
</head>
<body>
<pre>
<?php
require_once 'Mamifero.php';
require_once 'Reptil.php';
require_once 'Peixe.php';
require_once 'Ave.php';
require_once 'Canguru.php';
require_once 'Cachorro.php';
require_once 'Cobra.php';
require_once 'Tartaruga.php';
require_once 'Goldfish.php';
require_once 'Arara.php';

$m = new Mamifero;
$a = new Ave;
$r = new Reptil;
$c = new Canguru;
$k = new Cachorro;
$t = new Tartaruga;

$m->emitirSom();
$k->emitirSom();
$c->emitirSom();
?>
</pre>
</body>
</html>