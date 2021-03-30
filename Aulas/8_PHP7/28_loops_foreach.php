<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Loops - foreach</title>
    </head>
    <body>
        <?php
            
            $intens = array('sofa', 'mesa', 'cadeira', 'fogão', 'geladeira');
            echo '<pre>';
            print_r($intens);
            echo '</pre>';

            foreach ($intens as $intem) {
                echo "$intem <br/>";
            }
            
        ?>
    </body>
</html>