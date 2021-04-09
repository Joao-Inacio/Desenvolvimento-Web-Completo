<?php

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $arquivo = fopen('arquivo.txt', 'a', 'a');

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    fwrite($arquivo,  $texto);

    fclose($arquivo);
    


?>