<section class="bg-gray p-5">
    <div class="container form-container">
        <div class="row justify-content-between justify-content-md-center">
            <div class="col-md-6 col-lg-5 flex-md-unordered align-self-center">
                <div class="shadow-sm p-3 mb-5 bg-white rounded ">

                    <header class="text-center mb-4">
                        <h2 class="display-4 p-3">Se connecter</h2>
                    </header>

                    <?php echo $response;?>

                    <form action="" name="signup" method="post" class="px-5">


                        <div class="mb-3">
                            <input name="identifiant" class="form-hover form-control rounded py-3 px-3" type="text" placeholder="Identifiant">
                        </div>

                        <div class="mb-3">
                            <input name="password" class="form-hover form-control rounded py-3 px-3" type="password" placeholder="Mot de passe">
                        </div>



                        <div class="text-center mb-4 pt-3">
                            <button class="btn btn-block btn-lg btn-sign btn-info rounded g-py-13" name="signup" type="submit">Se connecter</button>
                        </div>

                    </form>


                    <footer class="text-center">
                        <p class="footer-form-t mb-0">Vous n'êtes pas encore inscrit ? <a class="footer-link-t" href="<?= $router->getLink("signup"); ?>">S'inscrire</a>
                        </p>
                    </footer>
                </div>
            </div>

        </div>
    </div>
</section>
