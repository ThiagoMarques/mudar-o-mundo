<?php require 'includes/header.php'; ?>

<?php require_once 'includes/navbar.php'; ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Fale Conosco</title>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <link rel="icon" href="assets/images/icon.png">
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
<div class="blog-container">
        <div class="index-container">
            <div class="row align-items-center">
                <div class="col-sm-6 form-contato">
                <form action="mail/contatoemail.php" method="post">  
                    <div class="form-group">
                        <div class="form-group">
                            <label for="txtnome">Nome</label>
                            <input type="input" name="txtNome" class="form-control" id="txtNome" placeholder="Seu Nome">
                        </div>

                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" name="txtEmail" class="form-control" id="txtEmail" aria-describedby="emailHelp"
                            placeholder="Seu email"><br>
                        <label for="txtMensagem">Mensagem</label><br>
                        <textarea class="form-control" name="txtMensagem" id="txtMensagem" rows="8" cols="40"></textarea>
                    </div>
                        <button type="submit" name="Enviar" class="btn btn-contato btn-primary">Enviar e-mail</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</body>

</html>