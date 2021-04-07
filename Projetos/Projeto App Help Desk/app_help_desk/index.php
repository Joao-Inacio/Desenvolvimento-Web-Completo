<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Favicon -->
        <link rel="shortcut icon" href="logo.png" type="image/x-icon">
        <style>
            .card-login{
                padding: 30px 0 0 0;
                width: 350px;
                margin: 0 auto;
            }
        </style>
        <title>App Help Desk</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="card-login">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="valida_login.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>
                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                            <div class="text-danger">
                                Usuario ou Senha Inválido(s)
                            </div>
                            <?php } ?>
                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>