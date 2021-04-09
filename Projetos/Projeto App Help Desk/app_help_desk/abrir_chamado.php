<? require_once "validador_acesso.php" ?>
<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .card-abrir_chamado{
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
                    <a class="nav-link" href="logoff.php">SAIR</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="card-abrir_chamado">
                    <div class="card">
                        <div class="card-header">
                            Abertura de chamado
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="registra_chamado.php" method="POST">
                                        <div class="form-group">
                                            <label for="">Título</label>
                                            <input name="titulo" type="text" class="form-control" placeholder="Título">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Categoria</label>
                                            <select class="form-control" name="categoria" id="">
                                                <option>Criação Usuário</option>
                                                <option value="impressora">Impressora</option>
                                                <option value="hardware">Hardware</option>
                                                <option value="software">Software</option>
                                                <option value="rede">Rede</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Descrição</label>
                                            <textarea class="form-control" name="descricao" id="" cols="30" rows="3"></textarea>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-6">
                                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                                            </div>
                                            <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>