<?php
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuarios = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuarios, $senha);

        /*$query = '
            create table tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';

        $conexao->exec($query);*/

        /*$query = '
                insert into tb_usuarios(
                    nome, email, senha
                ) values("João Inácio", "joaoinacio@teste.com.br", "123456")
        ';
        $conexao->exec($query);*/

        $query = '
            select * from tb_usuarios
        ';
        // $stmt = $conexao->query($query);
        foreach ($conexao->query($query) as $key => $value) {
            print_r($value);
            echo '<br/> <hr/>';
        }

        // $lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC); /*fatchAll*/ 

        /*echo '<pre>';
        print_r($usuario);
        echo'</pre>';*/

        /*foreach ($lista_usuario as $key => $value) {
            echo $value['nome'];
            echo '<hr />';
        }*/

    } catch (PDOException $e) {
        echo '<pre>';
        print_r($e);
        echo'</pre>';
    }

    
?>