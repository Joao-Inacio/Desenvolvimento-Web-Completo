<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Funçoes</title>
    </head>
    <body>
        <?php
            
            function exibirBoasVindas(){ //Void
                echo 'Bem vindos';
                echo '<br />';
            };
            exibirBoasVindas();
            // return
            function calcularAreaTerreno($largura, $comprimento){
                $area = $largura * $comprimento;
                return $area ;
            }
            // echo calcularAreaTerreno(30, 50);
            $total = calcularAreaTerreno(5, 25);
            echo $total;
            

        ?>
    </body>
</html>