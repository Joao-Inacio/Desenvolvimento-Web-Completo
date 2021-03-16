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
            // string
            $nome = 'João Inácio';
            // int
            $idade = 22;
            // float
            $peso = 99.9;
            // Boolean
            $fuma = true;

        ?>
        <h2>Ficha de cadastro</h2>
        <br>
        <p>Nome: <?php echo $nome; ?></p>
        <p>Nome: <?php echo $idade; ?></p>
        <p>Nome: <?php echo $peso; ?></p>
        <p>Nome: <?php echo $fuma; ?></p>
    </body>
</html>