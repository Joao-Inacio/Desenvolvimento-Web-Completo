<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <link rel="shortcut icon" href="icon/6-2-php-logo-png-image.png" type="image/x-icon">
        <title>Praticando Foreach</title>
    </head>
    <body>
        <?php
            
            $funcionarios = [
                array('Nome' => 'João', 'Salario' => 5000 ), 
                array('Nome' => 'Maria', 'Salario' => 5500 ), 
                array('Nome' => 'Júlia', 'Salario' => 4000 ), 
                array('Nome' => 'Ana', 'Salario' => 2200 ), 
            ];
            echo '<pre>';
            print_r($funcionarios);
            echo '</pre>';
            foreach ($funcionarios as $key => $funcionario) {
                foreach ($funcionario as $key2 => $valor) {
                    echo "$key2 - $valor <br/> ";
                }
                echo "<hr/>";
            }
            
        ?>
    </body>
</html>