<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Loops Preticas</title>
    </head>
    <body>
        <?php
            
            $registros  = array(
                array('titulo' =>'Titulo notícia 1', 'conteudo' => 'conteudo notícia 1'), 
                array('titulo' =>'Titulo notícia 2', 'conteudo' => 'conteudo notícia 2'), 
                array('titulo' =>'Titulo notícia 3', 'conteudo' => 'conteudo notícia 3'),
                array('titulo' =>'Titulo notícia 4', 'conteudo' => 'conteudo notícia 4'),
                );

            /*$idx = 0;
            while ($idx < 3) {
                echo $registros[$idx];
                echo '<hr/>';
                $idx++;
            }*/

            // echo '<pre>';
            // print_r ($registros);
            // echo "</pre>";
            echo '<br/> <br/> <br/>';
            $idx = 0;
            while ($idx < count($registros)) {
                echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
                echo '<p>'.$registros[$idx]['conteudo'].'</p>';
                echo '<hr/>';
                $idx++;
            }


        ?>
    </body>
</html>