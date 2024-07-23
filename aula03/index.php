<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = 'BIC cristal';
            $c1->cor = 'Azul';
            //$c1->ponta = 0.5;
            //$c1->carga = 99;
            //$c1->tampada = true;
            print_r($c1);
            $c1->rabiscar();
        
        ?>
    </pre>
</body>
</html>