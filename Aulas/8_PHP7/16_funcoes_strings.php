<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Funções nativas para manipular strings</title>
    </head>
    <body>
        <?php
            print '<h1>Funções nativas para manipular strings</h1>';

            $texto = 'curso de PHP';
            echo $texto. '<br />';
            echo strtolower($texto);
            echo '<hr />';
            echo $texto. '<br />';
            echo strtoupper($texto);
            echo '<hr />';
            echo $texto. '<br />';
            echo ucfirst($texto);
            echo '<hr />';
            echo $texto. '<br />';
            echo strlen($texto);
            echo '<hr />';
            echo $texto. '<br />';
            echo str_replace('PHP', 'JavaScript', $texto);
            echo '<hr />';
            echo $texto. '<br />';
            echo substr($texto, 8,8);
            
        ?>
    </body>
</html>