<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="public/custom/login/login.css">
<link rel="stylesheet" href="public/custom/login/style_icons.css">
<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Access</title>
</head>
<body class="text-center adm">
    <div class="container-sm">
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                
                </body>
                </html>
                
        <h3>LOGIN ACCESS</h3>

        <form class="form-signin" action="#">
        <img class="mb-4" src="public/img/logo.png" alt="" width="80%">
        <h6 class="p-3 mb-2 bg-primary text-white rounded">Painel - Administrativo</h6>

        <div class="form-label-group">
            <label for="inputEmail"></label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Entre com o seu login" required="" autofocus="">
        </div>
        <div class="form-label-group">
            <label for="inputEmail"></label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Entre com a sua senha" required="" autofocus="">
        </div>

        <br>
        
        <div class="checkbox p-2 mb-2 bg-dark text-white rounded">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label h7 mb-7 font-weight-bold text-white" for="exampleCheck1">Lembrar-me</label>
        </div>

        <!-- <br> -->
    
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        <!-- <p class="mt-5 mb-3 font-weight-bold text-white"></p> -->

        <!-- Botão de Recuperar Senha -->
        <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#ExemploModalCentralizado">
            Recuperar acesso
        </button>
        <!-- Botão de Recuperar Senha -->

        <div class="footer fixed-bottom p-1 bg-secondary text-white">Powered By - DBR - v1.2</div>
    </form>

    <!-- conteudo chama modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Recuperar meu acesso</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <div class="modal-body">

                    <form class="form-signin" method="post" action="restore_access/envia_form.php">
                        <div class="form-label-group">
                            <label for="recprimeironome">Insira o primeiro nome cadastrado</label>
                            <input type="text" name="recprimeironome" id="recprimeironome" class="form-control" placeholder="Entre com o primeiro nome cadastrado" required>
                        </div>

                        <div class="form-label-group">
                            <label for="recemail">Insira o email cadastrado</label>
                            <input type="email" name="recemail"  id="recemail" class="form-control" placeholder="Entre com o seu email cadastrado" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
    <!-- conteudo chama modal -->
    </div>

    <script src="public/bootstrap/js/jquery-3.5.1.slim.min.js" ></script>
    <script src="public/bootstrap/js/popper.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php 

?>