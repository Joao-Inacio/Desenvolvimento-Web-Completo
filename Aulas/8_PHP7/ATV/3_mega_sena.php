<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Mega sena</title>
    </head>
    <body>
        <?php
            
            $numeros = array();
            while(count($numeros) <= 5) {
                $num = rand(1, 60);
                if (!in_array($num, $numeros)) {
                    $numeros[] = $num;
                }
            }
            echo '<pre>';
            print_r($numeros);
            echo '</pre>';

        ?>
    </body>
</html>