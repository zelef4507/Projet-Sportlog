<div class="search">

    <div class="container" >
        <div class="row justify-content-md-center">

            <div class="col-md-12">

                <div class="search-block">

                    <h1 class="display-4">Bienvenue sur <span class="marque">SportLog</span></h1>
                    <p class="lead description">
                        This is a simple hero unit, a simple jumbotron-style component for
                        calling extra attention to featured content or information.
                    </p>


                </div>

                <div class="jumbotron search-block">
                    <form action="./profiles" method="post">
                        <div class="row">
                            <div class="col-md-12 input-group">

                                <div class="dropdown">
                                    <button class="form-control search-filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-filter"></i> Filtrer <span><i class="fa fa-angle-down"></i></span>
                                    </button>


                                    <div class="dropdown-menu filter-section" aria-labelledby="dropdownMenuButton">

                                        <div class="row" id="filter-section">

                                            <div class="col-md-6 col-sm-12">
                                                <div class="filtr">

                                                    <h5 class="title-filter">Sexe recherché</h5>

                                                    <div class="text-center">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="genderFemale" name="genre" value="1" class="custom-control-input">
                                                            <label class="custom-control-label" for="genderFemale"><i class="fa fa-venus"></i> Femme</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="genderMale" name="genre" value="2" class="custom-control-input">
                                                            <label class="custom-control-label" for="genderMale"><i class="fa fa-mars"></i> Homme</label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">

                                                <div class="filtr">
                                                    <h5 class="title-filter">Postes recherché(s)</h5>

                                                    <?php
                                                    foreach ($postes as $poste) {
                                                        ?>
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" name="poste<?= $poste['id'] ?>" id="poste<?= $poste['id'] ?>">
                                                            <label class="custom-control-label" for="poste<?= $poste['id'] ?>"><?= $poste['nom'] ?></label>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                                </div>

                                            </div>

                                        </div>


                                        <div class="footer text-center">

                                            <button type="button" id="reinitialize" class="btn btn-link btn-filter">Réinitialiser</button>

                                            <button type="button" class="btn btn-link btn-filter filter-valid" data-toggle="dropdown">Valider</button>

                                        </div>







                                    </div>


                                </div>


                                <span class="separate"></span>

                                <div class="input-group-prepend">
                            <span class="input-group-text icon-search">
                                <i class="fa fa-search"></i>
                            </span>
                                </div>

                                <input name="search_name" placeholder="Que recherchez vous ?" type="text" class="form-control" aria-label="Text input with segmented dropdown button">

                            </div>


                        </div>




                        <div class="input-group mt-3 row justify-content-md-center">

                            <button type="submit" name="search" class="btn btn-info btn-block col-md-4 search-btn">
                                Rechercher
                            </button>
                        </div>

                    </form>

                </div>


            </div>

        </div>

    </div>
</div>


<section class="container">

    <div class="row mt-5 p-5">

        <div class="col-lg-4 mb-2">

            <div class="text-center u-icon-block--hover">
                <img class="rounded-circle feature-box mb-4" src="./img/01.png" alt="Image Description">
                <h3 class="h5 g-color-black mb-3">Grosse fonctionnalité 1</h3>
                <p class="g-color-gray-dark-v4">
                    Ergo ego senator inimicus, si ita vultis, homini, amicus esse, sicut semper fui, rei publicae debeo.
                </p>
            </div>

        </div>

        <div class="col-lg-4 mb-2">

            <div class="text-center u-icon-block--hover">
                <img class="rounded-circle feature-box mb-4" src="./img/02.png" alt="Image Description">
                <h3 class="h5 g-color-black mb-3">Grosse fonctionnalité 2</h3>
                <p class="g-color-gray-dark-v4">
                    Ergo ego senator inimicus, si ita vultis, homini, amicus esse, sicut semper fui, rei publicae debeo.
                </p>
            </div>

        </div>

        <div class="col-lg-4 mb-2">

            <div class="text-center u-icon-block--hover">
                <img class="rounded-circle feature-box mb-4" src="./img/03.png" alt="Image Description">
                <h3 class="h5 g-color-black mb-3">Grosse fonctionnalité 3</h3>
                <p class="g-color-gray-dark-v4">
                    Ergo ego senator inimicus, si ita vultis, homini, amicus esse, sicut semper fui, rei publicae debeo.
                </p>
            </div>

        </div>
    </div>

</section>

<hr class="section-border">

<section class="presentation-block m-5">

    <div class="container pt-5">

        <div class="row">

            <div class="col-lg-6">
                <h2 class="title-style-1">Super fantastique</h2>

                <p>
                    Quid? si ipsas inimicitias, depono rei publicae causa, quis me tandem iure reprehendet, praesertim
                    cum ego omnium meorum consiliorum atque factorum exempla semper ex summorum hominum consiliis atque
                    f actis mihi censuerim petenda.
                </p>


                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="far fa-check-circle"></i></span>fonctionnalité 1 blabbla</li>
                    <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Featuer 2/fdgh514fg41h2fgh</li>
                    <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Disponible sur Android & sur iOs</li>
                    <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Inscrivez vous gratuitement dès maintenant</li>
                </ul>
            </div>


            <div class="col-lg-6">

                <img src="./img/01.png" alt="">

            </div>

        </div>

    </div>

</section>

<hr class="section-border">



<section class="container">

    <h1 class="pt-3 text-uppercase display-4 text-center" style="font-size: xx-large">Ils nous font confiance</h1>

    <div class="row">

        <div class="col-md-3">
            <img src="https://upload.wikimedia.org/wikipedia/fr/5/56/Metropolitans_92_Logo.png" alt="" width="150px" class="rounded m-3">
        </div>

        <div class="col-md-3">
            <img src="https://upload.wikimedia.org/wikipedia/fr/5/56/Metropolitans_92_Logo.png" alt="" width="150px" class="rounded m-3">
        </div>

        <div class="col-md-3">
            <img src="https://upload.wikimedia.org/wikipedia/fr/5/56/Metropolitans_92_Logo.png" alt="" width="150px" class="rounded m-3">
        </div>

        <div class="col-md-3">
            <img src="https://upload.wikimedia.org/wikipedia/fr/5/56/Metropolitans_92_Logo.png" alt="" width="150px" class="rounded m-3">
        </div>


    </div>



</section>

<hr class="section-border">