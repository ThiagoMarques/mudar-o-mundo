<?php
require_once 'includes/header.php';
?>

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
    <!--====================== Global site tag (gtag.js) - Google Analytics =========================-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149525971-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-149525971-1');
        </script>
    <!--====================== End Global site tag (gtag.js) - Google Analytics =====================-->
    <!--=========================== Facebook Pixel Code --><!--==================================-->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '979073025765599');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=979073025765599&ev=PageView&noscript=1(44 B)
    https://www.facebook.com/tr?id=979073025765599&ev=PageView&noscript=1
    "
    /></noscript>
    <!--====--><!--==================End Facebook Pixel Code --><!--==================================-->
</head>

<body>
<div class="blog-container">
        <div class="card cardBlog">
            <div class="row align-items-center">
                <div class="col-sm-4">
                <h2 class="title-post ">Fale Conosco</h2>

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
                        <button type="submit" name="Enviar" class="btn btn-primary">Enviar e-mail</button>
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