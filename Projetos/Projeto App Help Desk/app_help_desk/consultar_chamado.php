<? require_once "validador_acesso.php" ?>
<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .card-consultar-chamado{
                padding: 30px 0 0 0;
                width: 100%;
                margin: 0 auto;
            }
        </style>
        <title>App Help Desk</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">
                <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="nav-link" href="logoff.php">SAIR</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="card-consultar-chamado">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Título do chamado</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                                <p class="card-text">Descrição do chamado</p>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Título do chamado</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                                <p class="card-text">Descrição do chamado</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>