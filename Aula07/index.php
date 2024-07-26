<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Lutador.php';
            $l = array(
                new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1),
                new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
                new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1),
                new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
                new Lutador('Ufocobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3),
                new Lutador('Nerdaard', 'EUA', 30, 1.81, 105.7, 12, 2, 4)
            );
            $l[0]->apresentar();
            $l[2]->status();
            
            print_r($l);
            
        ?>
    </pre>
    
</body>
</html>