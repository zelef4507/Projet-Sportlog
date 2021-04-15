<div class="container">
    <div class="row">

        <h1 >
            Profiles
        </h1>

    </div>

    <div class="list"> <!--pour ma liste de joueur -->

        <?php
        if(!$list) {
            ?>
                <div class="alert alert-danger">
                    <h4>Aucun résultat !</h4>
                    <p style="margin: 0">
                        Malheuresement, aucun profil ne correspond à votre recherche..
                    </p>
                </div>
            <?php
        } else {

        foreach ($list as $profil):

            ?>

            <div class="row element_list">
                <div class="col-md-3"> <!--pour la photo -->
                    <img class="rounded-circle photo_profil" alt="erreur" src="https://i.skyrock.net/3434/88673434/pics/3241393447_1_9_PuHNc4It.png" height="100px"/>
                </div>




                <div class="col-md-6 ">
                    <div class="nom">
                        <header>
                            <h6 >
                                <strong>  <?php echo $profil['prenom'] . " " .$profil['nom'] ?></strong></br>
                            </h6>
                        </header>
                        <hr class="hr_1">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-3 no-padding Poste">
                            <h6> Poste</h6>
                            <span>
                                <p class="sous_info"><?= $profil['poste'] ?></p>
                            </span>
                        </div>
                        <div class="col-xs-12 col-md-3 no-padding Age">
                            <h6></i> Age</h6>
                            <span>
                                <p class="sous_info"><?= age($profil['naissance']) ?></p>
                            </span>
                        </div>
                        <div class="col-xs-12 col-md-3 no-padding Taille">
                            <h6> Taille</h6>
                            <span>
                                <p class="sous_info"><?= number_format($profil['taille']/100, 2)  ?></p>
                            </span>
                        </div>
                    </div>

                </div>

                <div class=" col-md-3 ajouter"> <!--pour ajouter au panier -->
                    <span>
                        <div >
                            <a href="<?= $router->getLink("profile", ["id" => 1 ]); ?>" class="btn btn-outline-light btn_ajouter2">
                                <i class="fa fa-plus fa-2x iconplus"  aria-hidden="true"></i>
                            </a>
                        </div>
                    </span>
                </div>

            </div>

        <?php endforeach; } ?>



    </div>


</div>