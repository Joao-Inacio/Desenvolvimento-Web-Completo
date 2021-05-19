<?php
    if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);

            $query = "select * from tb_usuarios where ";
            $query .= " email = '{$_POST['usuario']}' ";
            $query .= " AND senha = '{$_POST['senha']}'";

            echo $query;
            $stmt = $conexao->query($query);
            $usuario = $stmt->fetch();
            echo '<hr/>';
            echo '<pre>';
            print_r($usuario);
            echo '</pre>';

        } catch (PDOException $e) {
            echo '<pre>';
            print_r($e);
            echo'</pre>';
        }
    }

    
?>

<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- <link rel='stylesheet' href='style.css'> -->
        <title>Login</title>
    </head>
    <body>
        <form action="sqlInject.php" method='post'>
            <input type="text" name="usuario" placeholder="Usuário">
            <br>
            <input type="password" name="senha" id="" placeholder="Senha">
            <br>
            <button type="submit">Logar</button>
        </form>
            
            
    </body>
</html>
