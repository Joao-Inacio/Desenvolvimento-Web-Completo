
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

        <title>App Mail Send</title>
    </head>
    <body>
        <div class="container">
            <div class="py-3 text-center">
                <img class="d-block mx-auto mb-2" src="img/logo.png" alt="" width="72" height="72">
                <h2>Send Mail</h2>
                <p class="lead">Seu app de envio de e-mail particular</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body font-weight-bold">
                        <form action="processa_envio.php" method="post">
                            <div class="form-group">
                                <label for="para">Para:</label>
                                <input name="para" type="email" class="form-control" id="para" placeholder="email@dominio.com.br">
                            </div>
                            <div class="form-group">
                                <label for="assunto">Assunto:</label>
                                <input name="assunto" type=text" class="form-control" id="assunto" placeholder="Assunto do e-mail">
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Mensagem:</label>
                                <textarea class="form-control" name="mensagem" id="mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>