<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Funções Manipuladoras de Datas</title>
    </head>
    <body>
    <h1>Funções Manipuladoras de Datas</h1>
        <?php
            /*echo date('d/m/Y H:i');
            echo '<br /><br>';
            echo date_default_timezone_get();
            date_default_timezone_set('America/Sao_Paulo');
            echo '<br /><br>';
            echo date_default_timezone_get();
            echo '<br /><br>'; 
            echo date('d/m/Y H:i');
            echo '<br /><br>';*/
            $data_inicial = '2018-04-24';
            $data_final = '2021-03-23';

            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);
            echo $data_inicial . ' - ' . $time_inicial;
            echo '<br /><br>';
            echo $data_final . ' - ' . $time_final;

            $diferenca_time = $time_final - $time_inicial; //função abs retorna um valor absoluto de um numero
            echo '<br /><br>';
            echo "A diferença de segundos entre a $data_inicial e $data_final é $diferenca_time";
            $segundo_dia = 24 * 60 * 60;
            echo '<br /><br>';
            echo "Um dia possui $segundo_dia segundos ";
            $diferenca_entre_datas =  $diferenca_time / $segundo_dia;
            $arredondamento_dias = round($diferenca_entre_datas);
            echo '<br /><br>';
            echo "A diferença em dias é $arredondamento_dias";
            
        ?>
    </body>
</html>