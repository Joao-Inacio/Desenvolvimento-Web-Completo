<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>False Null Empty</title>
    </head>
    <body>
        <h1>False Null Empty</h1>
        <?php
            
            $funcionario1 = null;
            $funcionario2 ='';

            if (is_null($funcionario1)) {
                echo 'Sim, a variável é null';
            }else {
                echo 'Não é null';
            }
            echo '<br/>';
            if (is_null($funcionario2)) {
                echo 'Sim, a variável é null';
            }else {
                echo 'Não é null';
            }

            
        ?>
    </body>
</html>