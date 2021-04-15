<section class="bg-gray p-5">
    <div class="container form-container">


        <h1 class="text-uppercase mb-5">Mon compte</h1>


        <p>Vos informations :</p>

        <table class="table table-hover table-bordered">
            <tbody>
            <tr>
                <th scope="row" width="15%">Identifiant</th>
                <td ><?= $session->get("identifiant"); ?></td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td><?= $session->get("email"); ?></td>
            </tr>
            <tr>
                <th scope="row">Nom</th>
                <td><?= $session->get("nom"); ?></td>
            </tr>
            <tr>
                <th scope="row">Prénom</th>
                <td><?= $session->get("prenom"); ?></td>
            </tr>
            </tbody>
        </table>


        <div class="row text-center pt-5">
            <div class="col-md-6">
                <p>Pour changer de mot de passe :</p>
                <a href="<?= $router->getLink("account") ?>?password" class="btn btn-info text-uppercase">Cliquez ici</a>
            </div>
            <div class="col-md-6">
                <p>Pour changer d'adresse mail :</p>
                <a href="<?= $router->getLink("account") ?>?email" class="btn btn-info text-uppercase">Cliquez ici</a>
            </div>
        </div>
    </div>
</section>