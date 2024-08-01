<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 POO</title>
</head>
<body>
<pre>
<?php
require_once 'Animal.php';
require_once 'Mamifero.php';
require_once 'Lobo.php';
require_once 'Cachorro.php';
$m = new Mamifero;
$l = new Lobo;
$c = new Cachorro;
$m->emitirSom();
$l->emitirSom();
$c->emitirSom();
?>
</pre>
</body>
</html>