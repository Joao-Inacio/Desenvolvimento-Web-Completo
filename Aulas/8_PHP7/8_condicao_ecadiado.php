<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php 
            $idade = 10;
            $peso = 55;
            if (($idade >= 16 && $idade <=69) && $peso >= 50) {
                echo 'Atende aos requisitos';
            }else {
                echo 'Não atende aos requisitos';
            }
            
        ?>
    </body>
</html>