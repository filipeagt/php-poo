<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 POO</title>
</head>
<body>
<pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario(); 

    $p1->setNome('Taís');
    $p2->setNome('Filipe');
    $p3->setNome('Theo');
    $p4->setNome('Rajado');

    $p2->setCurso('Informática');
    $p3->setSalario(10000.75);
    $p4->setSetor('Estoque');

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
</pre>
</body>
</html>