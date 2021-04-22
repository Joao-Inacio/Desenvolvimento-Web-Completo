<?php
    session_start();
    
    $usuarios_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $perfis = array(1 => 'administrativo', 2 => 'Usuário');

    $usuarios_app = array(
        array('id' => 1 , 'email' => 'adm@teste.com.br' , 'senha' => '1020304050' , 'perfil_id' => 1),
        array('id' => 2 , 'email' => 'user@teste.com.br' , 'senha' => 'abcde' , 'perfil_id' => 1),
        array('id' => 3 , 'email' => 'jose@teste.com.br' , 'senha' => 'abcde' , 'perfil_id' => 2),
        array('id' => 4 , 'email' => 'maria@teste.com.br' , 'senha' => 'abcde' , 'perfil_id' =>  2)
    );
    /*echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';*/

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
        if($usuario_autenticado){
            echo 'Usuário autenticado.';
    
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['id'] = $usuario_id;
            $_SESSION['perfil_id'] = $usuario_perfil_id;
            header('Location: home.php');
        }else{  
            $_SESSION['autenticado'] = 'NÃO';
            header('Location: index.php?login=erro');
        }
/*
    print_r($_GET);
    echo '<br />';
    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];
    */
    
?>
