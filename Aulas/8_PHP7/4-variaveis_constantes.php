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
            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_bd_dev');
            define('BD_SENHA', 'senha_bd_dev');
            
            echo BD_URL . '<br />';
            echo BD_USUARIO . '<br />';
            echo BD_SENHA . '<br />';
        ?>
    </body>
</html>