<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'ContaBanco.php';
            $c1 = new ContaBanco;   //Jubileu
            $c2 = new ContaBanco;   //Creuza
            $c1->abrirConta('CC');
            $c1->setDono('Jubileu');
            $c1->setNumConta(1234);
            $c2->abrirConta('CP');
            $c2->setDono('Creuza');
            $c2->setNumConta(5678);

            $c1->depositar(300);
            $c2->depositar(500);

            $c2->sacar(1000);

            $c1->pagarMensal();
            $c2->pagarMensal();

            $c1->sacar(338);
            $c2->sacar(630);

            $c1->fecharConta();
            $c2->fecharConta();

            print_r($c1);
            print_r($c2);
        ?>
    </pre>
</body>
</html>