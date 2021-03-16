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
            $nome = 'João';
            $cor = 'Cinza';
            $idade = 22;
            echo 'Olá '. $nome . ' Sua cor favorita é ' . $cor . ' e sua idade é '. $idade . 'Anos';
            echo '<br />';
            echo "Olá $nome, Sua cor favorita é $cor e sua idade é $idade Anos";
            
        ?>
    </body>
</html>