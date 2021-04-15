<section class="bg-gray p-5">
    <div class="container form-container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7 flex-md-unordered align-self-center mb-5">
                <div class="shadow-sm p-3 mb-5 bg-white rounded ">

                    <header class="text-center mb-4">
                        <h2 class="display-4 p-3">S'inscrire</h2>
                    </header>

                    <?php echo $response;?>

                    <form action="" name="signup" method="post" class="px-5">

                        <div class="col-mb-12 row mb-3">
                            <div class="col-md-6">
                                <input name="prenom" class="form-hover form-control rounded py-3 px-3" type="text" placeholder="Prénom">
                            </div>

                            <div class="col-md-6">
                                <input name="nom" class="form-hover form-control rounded py-3 px-3" type="text" placeholder="Nom">
                            </div>
                        </div>

                        <div class="mb-3">
                            <input name="identifiant" class="form-hover form-control rounded py-3 px-3" type="text" placeholder="Identifiant">
                        </div>

                        <div class="mb-3">
                            <input name="email" class="form-hover form-control rounded py-3 px-3" type="email" placeholder="exemple@gmail.com">
                        </div>

                        <div class="col-mb-12 row mb-3">
                            <div class="col-md-6">
                                <input name="password" class="form-hover form-control rounded py-3 px-3" type="password" placeholder="Mot de passe">
                            </div>

                            <div class="col-md-6">
                                <input name="confirm_password" class="form-hover form-control rounded py-3 px-3" type="password" placeholder="Confirmez le mot de passe">
                            </div>
                        </div>


                        <div class="text-center mb-4 pt-3">
                            <button class="btn btn-block btn-lg btn-sign btn-info rounded g-py-13" name="signup" type="submit">S'inscrire</button>
                        </div>

                    </form>


                    <footer class="text-center">
                        <p class="footer-form-t mb-0">Vous avez déjà un compte ? <a class="footer-link-t" href="<?= $router->getLink("signin"); ?>">Se connecter</a>
                        </p>
                    </footer>
                </div>
            </div>

            <div class="col-md-4 flex-md-first align-self-center mb-5">
                <div class="mb-5">
                    <h1 class="text-forms mb-3">Rejoignez nous!</h1>
                    <p class="text-under-forms text-uppercase">Rejoignez nous dès maintenant !</p>
                </div>

                <div class="row">
                    <div class="col-md-11 col-lg-9">

                        <div class="media mb-4">
                            <div class="form-icon mr-4">
                                <span class="align-self-center fa-2x icon-list-forms">
                                    <i class="fas fa-address-card"></i>
                                </span>
                            </div>
                            <div class="media-body align-self-center">
                                <p class="text-list-forms mb-0">Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus</p>
                            </div>
                        </div>



                        <div class="media mb-5">
                            <div class="mr-4 form-icon">
                    <span class="align-self-center fa-2x icon-list-forms">
                      <i class="fas fa-address-book"></i>
                    </span>
                            </div>
                            <div class="media-body align-self-center">
                                <p class="text-list-forms mb-0">Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
