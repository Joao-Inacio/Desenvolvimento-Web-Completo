<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Casting
        </title>
    </head>
    <body>
        <?php
            $valor = 10;
            $valor2 = (float) $valor; //float, double, real
            $valor3 = (string) $valor; //string
            $valor4 = (int) $valor; //integer, int
            $valor5 = (bool) $valor; //boolean
            echo gettype($valor);
            echo '<br />';
            echo gettype($valor2);
            echo '<br />';
            echo gettype($valor3);
            echo '<br />';
            echo gettype($valor4);
            echo '<br />';
            echo gettype($valor5);
            echo '<br />';
            echo $valor;
            echo '<br />';
            echo $valor2;
            echo '<br />';
            echo $valor3;
            echo '<br />';
            echo $valor4;
            echo '<br />';
            echo $valor5;
            
            
        ?>
    </body>
</html>