<div class="container " >
    <div class="tab-content " role="tablist">
        <ul class="nav navbar-collapse" role="tablist">
            <li class="nav-item bordureNav" role="presentation">
                <a class="nav-link active lienNavigation" data-toggle="tab" href="#home2" role="tab" style="color:white";><i class="fa fa-gear info"></i> Information</a>
            </li>
            <li class="nav-item bordureNav" role="presentation">
                <a class="nav-link lienNavigation " data-toggle="tab" href="#profile2" role="tab" style="color:white"><i class="fa fa-film info"></i> Videos</a>
            </li>


        </ul>


        <div class="tab-content Videodiv" role="tablist">
            <div class="tab-content fond_profile" role="tablist" >

                <div class="tab-pane fade show active" id="home2" role="tabpanel">

                    <div class="row">
                        <!--div image-->
                        <div class="col-xs-12 col-md-4 no-padding">
                            <img class="rounded-circle img" alt="Photo de <?= $profil['prenom'] ?> <?= $profil['nom'] ?>" src="img/ace.jpg" height="200px"/>
                            <div class="row div_btn_profile">

                                <div class="col-xs-8 col-md-4 ">
                                    <a class="btn btn-outline-light btn_message " href="#"> Ajouter </a>

                                </div>
                            </div>
                        </div>
                        <!--fin div image-->



                        <div class="col-xs-12 col-md-8">
                            <!--div titre joueur-->
                            <div class="col-xs-12 " style="padding: 0 15px">
                                <header>
                                    <h1 class="titre_joueur">
                                        <i class="fa fa-bookmark info"></i><strong> <?= $profil['prenom'] ?> <?= $profil['nom'] ?></strong></br>
                                    </h1>
                                </header>
                                <hr class="hr_1">
                            </div>
                            <!--fin div titre joueur-->

                            <div class="col-xs-12 col-md-12">
                                <section class="information">
                                    <h3 class="info_gen">Information Générale</h3>

                                    <!--div info 1-->
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3 no-padding Age">
                                            <h6 class="info_profile"><i class="fa fa-birthday-cake info"></i> Age</h6>
                                            <span>
                      <p class="sous_info"><?= age($profil['naissance']) ?> ans</p>
                    </span>
                                        </div>
                                        <div class="col-xs-12 col-md-3 no-padding Taille">
                                            <h6 class="info_profile"><i class="fa fa-sort-amount-desc info"></i> Taille</h6>
                                            <span>
                      <p class="sous_info"><?= number_format($profil['taille']/100, 2)  ?>'</p>
                    </span>
                                        </div>
                                        <div class="col-xs-12 col-md-3 no-padding Poste">
                                            <h6 class="info_profile"><i class="fa fa-bullseye info"></i> Poste</h6>
                                            <span>
                      <p class="sous_info"><?= $profil['poste'] ?></p>
                    </span>
                                        </div>

                                    </div>
                                    <!--fin div info 1-->

                                    <!--div info 2-->
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3 no-padding Main_forte">
                                            <h6 class="info_profile"><i class="fa fa-signing info"></i> Main Forte</h6>
                                            <span>
                      <p class="sous_info">Droite</p>
                    </span>
                                        </div>
                                        <div class="col-xs-12 col-md-3 no-padding Nationalité">
                                            <h6 class="info_profile"><i class="fa fa-map-marker-alt info"></i> Ville</h6>
                                            <span>
                      <p class="sous_info"><?= $profil['ville'] ?></p>
                    </span>
                                        </div>
                                        <div class="col-xs-12 col-md-3 no-padding Equipe">
                                            <h6 class="info_profile"><i class="fa fa-group info"></i> Equipe</h6>
                                            <span>
                      <p class="sous_info">Lakers</p>
                    </span>
                                        </div>
                                    </div>
                                    <!--fin div info 2-->
                                </section>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-11 style_jeu">
                            <p><i class="fa fa-flash info"></i> <strong>STYLE DE JEU : </strong></p>
                            <p>Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 savoir_plus">
                            <p><i class="fa fa-thumb-tack info"></i> <strong>EN SAVOIR PLUS :</strong></p>
                            <p>Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche</p>
                        </div>
                    </div>





                </div>

                <!--PARTIE JEANYVES -->

                <div class="tab-pane fade " id="profile2" role="tabpanel">
                    <div>  <h1 class="titreVideo"> Mes highlights 2019-2020 </h1> </div>
                    <div class="row " >
                        <div class="col-lg-6 Video">

                            <iframe  width="510" height="315" src="https://www.youtube.com/embed/SjgXXpR5EqI" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div class="col-lg-6">
                            <h4 class="titreVideo">Commentaire </h4>
                            <p class="commentaire">Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.
                            </p>
                        </div>
                    </div>


                    <div>  <h1 class="titreVideo"> Mes entrainements / Peformances </h1> </div>
                    <div class="row ">

                        <div class="col-lg-6 Video">
                            <iframe  width="510" height="315" src="https://www.youtube.com/embed/Celr5kW_4e8" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="titreVideo">Commentaire </h4>
                            <p class="commentaire">Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus haec movebantur, quemquam absolutum.
                            </p>
                        </div>
                    </div>

                </div>



            </div>





        </div>
    </div>
</div>
