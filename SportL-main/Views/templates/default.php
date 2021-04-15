<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/SportLog/css/bootstrap.css">
    <link rel="stylesheet" href="/SportLog/css/custom.css">
    <link rel="stylesheet" href="/SportLog/css/profil.css">

    <title><?= $router->getPageDisplay(); ?> - SportLog</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light nav-color bg-white">
    <div class="container">
        <a class="navbar-brand" href="<?= $router->getLink("home") ?>">
            <img src="https://i.pinimg.com/originals/6b/37/30/6b3730b90e907ee7d98655b49eeffebb.png" width="100" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="col ">
            <ul class="list-inline text-uppercase g-font-weight-600 text-lg-right g-font-size-12 pb-0 mb-0 mt-3">
                <?php if($session->isLogged()) : ?>
                    <li class="list-inline-item nav-top-btn">
                        <a href="<?= $router->getLink("account") ?>">Mon compte</a>
                    </li>
                    <li class="list-inline-item">|</li>
                    <li class="list-inline-item nav-top-btn">
                        <a href="<?= $router->getLink("logout") ?>">Me déconnecter</a>
                    </li>
                <?php else: ?>
                    <li class="list-inline-item nav-top-btn">
                        <a href="<?= $router->getLink("signup") ?>">S'inscrire</a>
                    </li>
                    <li class="list-inline-item">|</li>
                    <li class="list-inline-item nav-top-btn">
                        <a href="<?= $router->getLink("signin") ?>">Se connecter</a>
                    </li>
                <?php endif; ?>
            </ul>


            <nav class="navbar navbar-expand-lg p-0">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-color text-uppercase g-font-weight-600 ml-auto">

                        <li class="nav-item nav-btn <?php $router->active(1) ?>">
                            <a href="<?= $router->getLink("home") ?>" class="nav-link px-0">Accueil</a>
                        </li>
                        <li class="nav-item nav-btn <?php $router->active(6) ?>">
                            <a href="<?= $router->getLink("download") ?>" class="nav-link px-0">Notre Application</a>
                        </li>
                        <li class="nav-item nav-btn <?php $router->active(2) ?>">
                            <a href="<?= $router->getLink("profiles") ?>" class="nav-link px-0">Profiles</a>
                        </li>
                        <li class="nav-item nav-btn <?php $router->active(5) ?>">
                            <a href="<?= $router->getLink("aboutus") ?>" class="nav-link px-0">Qui sommes nous ?</a>
                        </li>
                    </ul>
                </div>


            </nav>



        </div>


    </div>

</nav>
<?php echo $content; ?>
<footer class="container">
    <div class="row pt-5">
        <div class="col-sm-6 col-lg-3 mb-3">
            <h3 class="footer-title mb-3">A propos</h3>

            <ul class="list-unstyled">
                <li class="py-1">
                    <a class="footer-link" href="#">A propos</a>
                </li>
                <li class="py-1">
                    <a class="footer-link" href="#">Services</a>
                </li>
            </ul>

        </div>

        <div class="col-sm-6 col-lg-3 mb-3">
            <h3 class="footer-title mb-3">liens utiles</h3>

            <ul class="list-unstyled">
                <li class="py-1">
                    <a class="footer-link" href="#">CGU & CGV</a>
                </li>
                <li class="py-1">
                    <a class="footer-link" href="#">Mentions légales</a>
                </li>
                <li class="py-1">
                    <a class="footer-link" href="#">Support</a>
                </li>
            </ul>

        </div>

        <div class="col-sm-6 col-lg-3 mb-3">
            <h3 class="footer-title mb-3">Autres liens</h3>


            <ul class="list-unstyled">
                <li class="py-1">
                    <a class="footer-link" href="#">Application</a>
                </li>
                <li class="py-1">
                    <a class="footer-link" href="#">Postuler chez SportLog</a>
                </li>
                <li class="py-1">
                    <a class="footer-link" href="#">FAQ Général</a>
                </li>
            </ul>

        </div>

        <div class="col-sm-6 col-lg-3 mb-3">

            <h3 class="footer-title mb-3">Restez connecté</h3>

            <ul class="list-inline mb-0">
                <li class="list-inline-item g-mx-2">
                    <a class="footer-social u-icon-v3 g-width-35 g-height-35 g-color-black g-bg-secondary g-color-white--hover g-bg-primary--hover g-font-size-13 rounded-circle" href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-2">
                    <a class="footer-social u-icon-v3 g-width-35 g-height-35 g-color-black g-bg-secondary g-color-white--hover g-bg-primary--hover g-font-size-13 rounded-circle" href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-2">
                    <a class="footer-social u-icon-v3 g-width-35 g-height-35 g-color-black g-bg-secondary g-color-white--hover g-bg-primary--hover g-font-size-13 rounded-circle" href="">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-2">
                    <a class="footer-social u-icon-v3 g-width-35 g-height-35 g-color-black g-bg-secondary g-color-white--hover g-bg-primary--hover g-font-size-13 rounded-circle" href="">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <hr class="m-0">

    <div class="row align-items-center py-2">
        <div class="col-4">
            <a href="<?= $router->getLink("home") ?>">
                <img class="footer-img" src="https://i.pinimg.com/originals/6b/37/30/6b3730b90e907ee7d98655b49eeffebb.png" alt="Image Description">
            </a>
        </div>
        <div class="col-8 text-right">
            <p class="mb-0 footer-text">© 2020 SportLog. Tous droits réservés.</p>
        </div>
    </div>

</footer>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/03e9266112.js" crossorigin="anonymous"></script>
<script src="./js/custom.js"></script>
</body>
</html>