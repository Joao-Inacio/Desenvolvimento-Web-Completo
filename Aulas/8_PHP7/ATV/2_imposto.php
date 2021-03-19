<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Atividades para fixação do conteúdo</title>
    </head>
    <body>
        <?php
            
            function calcularImposto($salario){
                if ($salario <= 1.903) {
                    echo 'Alíquota ISENTO';
                }elseif ($salario >= 1.904 && $salario <= 2.826) {
                    echo 'Alíquota 7,5%';
                }elseif ($salario >= 2.827 && $salario <= 3.751) {
                    echo 'Alíquota 15%';
                }elseif ($salario >= 3.752 && $salario <= 4.664) {
                    echo 'Alíquota 22,5%';
                }elseif ($salario > 4.665) {
                    echo 'Alíquota 27,5%';
                }
            }
            $imposto = calcularImposto(5.000);
            echo $imposto
            
        ?>
    </body>
</html>