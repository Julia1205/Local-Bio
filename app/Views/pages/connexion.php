<!--FENETRE CONNEXION-->
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
                <div class="ConnexionBox">
                    <h2 class="TitleConnexion">Connectez-Vous A Votre Compte</h2>
                    <form class="FormConnexion">
                        <input type="text" placeholder="Nom d'utilisateur" class="InputConnexion">
                        <input type="password" placeholder="Mot de passe" class="InputConnexion">
                        <input type="submit" value="Connexion" class="ConnexionSubmit">
                    </form>
                </div>
                <div class="RegisterBox">
                    <!--  <span>Nouveau sur Organico ?</span><a href="Inscription.php" class="LienSubscribe">S'inscrire</a> -->
					<?php echo anchor ('Pages/view/inscription', 'S\'inscrire', array('class' => 'LienSubscribe')); ?>
                </div>
            </div>
            <a class="ForgotPassword">MOT DE PASSE OUBLIE ?</a>
        </div>
    </div>
    <!--FIN FENETRE CONNEXION-->