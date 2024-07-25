<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - POO</title>
    <style>
        p.erro {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto;
            //$c->ligar();
            $c->play();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->abrirMenu();
            $c->fecharMenu();
            $c->ligarMudo();
            $c->pause();
            $c->abrirMenu();
        ?>
    </pre>
</body>
</html>