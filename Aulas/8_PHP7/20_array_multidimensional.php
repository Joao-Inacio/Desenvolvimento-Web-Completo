<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Array Multidimensional</title>
    </head>
    <body>
        <h1>Array Multidimensional</h1>
        <?php
            
            // $lista_coisas = array();
            $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Morango', 3 => 'Maçã', 4 => 'Uva');
            $lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];
            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre><br/>';
            echo $lista_coisas['pessoas'] [1];

            
        ?>
    </body>
</html>