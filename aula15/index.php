<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 POO</title>
</head>
<body>
<pre>
<?php 
require_once 'Video.php';
require_once 'Gafanhoto.php';
require_once 'Visualizacao.php';
$v[0] = new Video('Aula 1 POO');
$v[1] = new Video('Aula 12 PHP');
$v[2] = new Video('Aula 15 HTML5');
$g[0] = new Gafanhoto('Jubileu', 26, "M", 'juba');
$g[1] = new Gafanhoto('Creuza', 12, "F", "Creuzita");
$u = array (new Visualizacao($g[0],$v[0]),
            new Visualizacao($g[0],$v[1]),
            new Visualizacao($g[0],$v[2]),
            new Visualizacao($g[1],$v[0]),
            new Visualizacao($g[1],$v[2]));
print_r($u);
?>
</pre>
</body>
</html>