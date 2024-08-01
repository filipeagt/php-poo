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
require_once 'Cachorro.php';
$c = new Cachorro;
$c->reagirFrase('Olá');         //Abanar e latir
$c->reagirFrase('Vai apanhar'); //Rosnar
$c->reagirHora(11, 45);         //Abanar
$c->reagirHora(21, 00);         //Ignorar
$c->reagirDono(false);          //Rosnar e latir
$c->reagirIdadePeso(2, 12.5);   //Latir
$c->reagirIdadePeso(17, 4.5);   //Rosnar
?>
</pre>
</body>
</html>