<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../public/custom/form/formPassword.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Postgres</title>
</head>
<body>
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
                
        <h3>CRUD - POSTGRES</h3>
        <form>
            <div class="row">
                <div class="col">
                    <label for="validationFirsName">Primeiro nome</label>
                    <input type="text" name="firstName" class="form-control" id="validationFirsName" placeholder="Nome" minlength="3" pattern="[a-zA-Z]+$" required>
                    <div class="invalid-feedback">Primeiro nome!</div>
                </div>
                <div class="col">
                    <label for="validationLastName">Ultimo nome</label>
                    <input type="text" name="lastName" class="form-control" id="validationLastName" placeholder="Sobrenome" minlength="3" pattern="[a-zA-Z]+$" required>
                    <div class="invalid-feedback">Ultimo nome!</div>
                </div>
                <div class="col">
                    <label for="validationDateBirthay">Data Aniversário</label>
                    <input type="date" name="dataNasc" class="form-control" id="validationDateBirthay" required="required" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1920-01-01" max="2007-01-01"> 
                    <div class="invalid-feedback">Data Nascimento!</div>
                </div>
                <div class="col-md-3 mb-2 input-container">
                    <label for="validationPassword">Password  
                        <i class="material-icons md-18 visibility">visibility_off</i>
                    </label>
                    <input type="password" id="validationPassword" class="form-control" placeholder="Password" required>    
                    <div class="invalid-feedback">Password fora do padrão!</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="validationEmail">E-mail</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="email" name="email" class="form-control" id="validationEmail" placeholder="fulano@dominio.com.br" aria-describedby="inputGroupPrepend" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        <div class="invalid-feedback">E-mail válido.</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationEndereco">Endereço</label>
                    <input type="text" class="form-control" placeholder="Logradouro">
                    <div class="invalid-feedback">Endereço.</div>
                </div>
                <div class="col-md-1 mb-1">
                    <label for="validationCustom01">Número</label></label>
                    <input type="text" class="form-control" placeholder="N">
                    <div class="invalid-feedback">Entre com o número.</div>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom01">Complemento</label></label>
                    <input type="text" class="form-control" placeholder="Complemento">
                </div>                   
            </div>

            <div class="row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom07">Cidade</label>
                <select name="cidade" class="custom-select" id="validationCustom04" required>
                    <option option value="">Selecione</option>
                    <option value="Jaraguá do Sul - SC">Jaraguá do Sul</option>
                    <option value="Massaranduba - SC">Massaranduba</option>
                    <option value="Schroeder - SC">Schroeder</option>
                    <option value="Guaramirim - SC">Guaramirim</option>
                    <option value="Joinville - SC">Joinville</option>
                    <option value="São Bento do Sul - SC">São Bento do Sul</option>
                    <option value="Rio Negrinho - SC">Rio Negrinho</option>
                </select>
                <div class="invalid-feedback">Informe uma cidade válida.</div>
            </div>
                <div class="col-md-2 mb-2">
                    <label for="validationCustom01">Cep</label>
                    <input type="text" class="form-control" placeholder="Cep">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom01">Cel Phone</label></label>
                    <input type="text" class="form-control" placeholder="N Celular">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom01">Cel Phone2</label></label>
                    <input type="text" class="form-control" placeholder="N Celular">
                </div>                   
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>

    <script src="../../public/custom/form/formPassword.js" ></script>
    <script src="../../public/bootstrap/js/jquery-3.5.1.slim.min.js" ></script>
    <script src="../../public/bootstrap/js/popper.min.js"></script>
    <script src="../../public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php 

?>