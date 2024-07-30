<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO 09</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p[0] = new Pessoa('Filipe', 32, 'M');
        $p[1] = new Pessoa('Taís', 31, 'F');

        $l = array(
            new Livro('Eletrônica','Malvino',1000, $p[0]),
            new Livro('Game of Thrones', 'Martin', 800, $p[1]),
            new Livro('Harry Potter', 'Rowling', 200, $p[1])
        );

        $l[0]->abrir();
        $l[0]->folhear(200);
        $l[0]->voltarPag();
        $l[0]->detalhes();

        $l[1]->detalhes();
        $l[2]->detalhes();
        ?>
    </pre>
</body>
</html>