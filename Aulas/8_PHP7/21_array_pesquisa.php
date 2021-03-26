<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Array Métodos  de Pesquisa</title>
    </head>
    <body>
        <?php
            
            $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
            /*echo '<pre>';
            print_r($lista_frutas);
            echo '</pre>';

            $existe1 = array_search('Abacate', $lista_frutas);
            echo '<br />';

            $existe = in_array('Uva', $lista_frutas);
            if ($existe) {
                echo 'Sim o valor existe no array ';
            }else {
                echo 'Não existe o valor no array';
            }
            if ($existe1 != null) {
                echo '<br/>Sim o valor existe no array ';
            }else {
                echo '<br/>Não existe o valor no array';
            }*/
            $lista_coisa = [
                'frutas' => $lista_frutas,
                'pessoas' => ['João', 'Maria']
            ];
            echo '<pre>';
            print_r($lista_coisa);
            echo '</pre>';
            $pes = in_array('Uva', $lista_coisa['frutas']);
            echo $pes;
            
        ?>
    </body>
</html>