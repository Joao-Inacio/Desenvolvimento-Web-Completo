<? require_once "validador_acesso.php" ?>
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
            .card-home{
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
                <div class="card-home">
                    <div class="card">
                        <div class="card-header">
                            Menu
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center ">
                                    <img src="formulario_abrir_chamado.png" width="70" height="70">
                                </div>
                                <div class="col-6 d-flex justify-content-center ">
                                    <img src="formulario_consultar_chamado.png" width="70" height="70">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>