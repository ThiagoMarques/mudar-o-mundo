<?php require 'includes/header.php'; ?>

<?php require_once 'includes/navbar.php'; ?>

<body>
    <div class="hero-container bg-retangulo bg-triangulo container">
        <!-- Linha principal-->
        <div class="row">
            <!-- Coluna esquerda-->
            <div class="col-md-6 heading-column">
                <div class="heading-mudar">
                    <h1 class="display-3 heading-title">Show de Humor Solidário</h1>
                    <div class="heading-sub">
                        <h4 class="heading-subtitle">Em prol do</h4>
                        <img class="heading-hcglogo" src="assets/imgs/hcg.png" alt="#LogoHCG"></a>
                    </div>
                  </div> <!-- /end heading mudar -->
                  <?php include 'includes/botao-sympla.php'; ?>
                  <?php include 'includes/widget-sympla.php'; ?>
              </div> <!-- /end col-md-6 -->
            <!-- Coluna direita-->
            <div class="col-md-6">
                <img src="assets/imgs/tonimarmo-img2.png" alt="Toni Marmo convida para o Show de Humor Solidário"></a>
            </div>
        </div>
        <!-- Fim da linha principal-->
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>