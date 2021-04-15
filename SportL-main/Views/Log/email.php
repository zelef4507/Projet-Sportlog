<section class="bg-gray p-5">
    <div class="container form-container">


        <h1 class="text-uppercase mb-5">Mon compte</h1>


        <p>Mettre à jour votre adresse mail :</p>

        <div class="row justify-content-center">

            <div class="col-md-6">

                <?php echo $response; ?>

                <form action="" name="email" method="post" class="px-5">


                    <div class="mb-3">
                        <input name="actual_password" class="form-hover form-control rounded py-3 px-3" type="password" placeholder="Mot de passe actuel">
                    </div>

                    <div class="mb-3">
                        <input name="new_email" class="form-hover form-control rounded py-3 px-3" type="password" placeholder="Nouveau email">
                    </div>


                    <div class="mb-3">
                        <input name="confirm_email" class="form-hover form-control rounded py-3 px-3" type="password" placeholder="Confirmez l'email'">
                    </div>


                    <div class="text-center mb-4 pt-3">
                        <button class="btn btn-block btn-lg btn-sign btn-info rounded g-py-13" name="email_update" type="submit">Mettre à jour</button>
                    </div>

                </form>
            </div>

        </div>



    </div>
</section>
