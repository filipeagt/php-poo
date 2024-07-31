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
        $v1 = new Visitante;
        $a1 = new Aluno;
        $b1 = new Bolsista;
        $v1->setNome('Theo');
        $a1->setNome('Filipe');
        $b1->setNome('Taís');
        $a1->pagarMensalidade();
        $b1->pagarMensalidade();
    ?>
    </pre>
</body>
</html>