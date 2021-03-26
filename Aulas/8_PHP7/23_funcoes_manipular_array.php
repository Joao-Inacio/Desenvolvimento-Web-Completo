<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <title>Funções Nativas para manipular Array</title>
    </head>
    <body>
        <h1>Funções Nativas para manipular Array</h1>
        <?php
            
            /*$array ='String';
            $retorno = is_array($array);
            if ($retorno) {
                echo 'SIM, é um array';
            }else {
                echo 'Nao, é um array';
                
            }*/
            /*$array = [1 => 'a', 7 => 'b', 18 => 'c'];
            echo '<pre>';
                print_r($array);
            echo '</pre>';
            $chaves_array = array_keys($array);
            echo '<br /><pre>';
                print_r($chaves_array);
            echo '</pre>';*/
            /*$array = ['teclado', 'mouse', 'hdmi', 'gabinet', 'fonte atx', 'notebook'];
            echo '<pre>';
                print_r($array);
            echo '</pre>';
            sort($array);
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            $array = ['teclado', 'mouse', 'hdmi', 'gabinet', 'fonte atx', 'notebook'];
            echo '<pre>';
                print_r($array);
            echo '</pre>';
            asort($array);
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            $array = ['teclado', 'mouse', 'hdmi', 'gabinet', 'fonte atx', 'notebook'];
            echo '<pre>';
                print_r($array);
                echo count($array);
            echo '</pre>'

            $array1 = ['osx', 'windows'];
            $array2 = array('linux');
            $array3 = ['solaris'];
            $new_array = array_merge($array1, $array2, $array3);
            echo '<pre>';
                print_r($new_array);
            echo '</pre>';

            $string = '26/04/2018';
            $array_retorno = explode('/', $string);
            echo '<pre>';
                print_r($array_retorno);
            echo '</pre>';*/
            $array = ['a', 'b', 'x', 'y'];
            $string = implode(',', $array);
            echo '<pre>';
                print_r($string);
            echo '</pre>';

            
        ?>
    </body>
</html>