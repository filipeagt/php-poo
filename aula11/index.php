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
        require_once 'Pessoa.php';
        require_once 'Visitante.php'; 
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        //$p1 = new Pessoa; // Classe abstrata não pode ser instanciada
        /*$v1 = new Visitante;
        $v1->setNome('Theo');
        $v1->setIdade(6);
        $v1->setSexo('M');*/
        $a1 = new Aluno;
        $a1->setNome('Filipe');
        $a1->setMatricula(1111);
        $a1->setIdade(32);
        $a1->setSexo('M');
        $a1->setCurso('TI');
        $a1->pagarMensalidade();
        print_r($a1);

        $b1 = new Bolsista;        
        $b1->setNome('Taís');
        $b1->setMatricula(2222);
        $b1->setBolsa(30);
        $b1->setCurso('ADM');
        $b1->setIdade(31);
        $b1->setSexo('F');
        $b1->pagarMensalidade();
        print_r($b1);
    ?>
    </pre>
</body>
</html>