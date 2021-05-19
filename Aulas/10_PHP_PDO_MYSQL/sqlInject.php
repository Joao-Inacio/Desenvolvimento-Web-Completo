<!-- http://localhost/php_com_pdo/sqlInject.php -->
<?php
    if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);

            $query = "select * from tb_usuarios where ";
            $query .= " email = :usuario ";
            $query .= " AND senha = :senha";


            // Para evitar Sql injecto
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt->execute();

            $usuario = $stmt->fetch();
            echo '<pre>';
            print_r($usuario);
            echo'</pre>';

            /*echo $query;
            $stmt = $conexao->query($query);
            $usuario = $stmt->fetch();
            echo '<hr/>';
            echo '<pre>';
            print_r($usuario);
            echo '</pre>';*/

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
        <style>
            
            div{
                width: 550px;
                height: 650px;
                margin: 0 auto;
                margin-top: 50px;
                text-align: center;
            }
            input{
                margin-bottom: 5px;
                width: 250px;
                height: 30px;
            }
            button{
                width: 125px;
                height: 30px;
            }
        </style>
        <title>Login</title>
    </head>
    <body>
        <div>
            <form action="sqlInject.php" method='post'>
                <input type="text" name="usuario" placeholder="Usuário">
                <br>
                <input type="password" name="senha" id="" placeholder="Senha">
                <br>
                <button type="submit">Logar</button>
            </form>
        </div>
            
            
    </body>
</html>
