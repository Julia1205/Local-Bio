<!--FENETRE CONNEXION-->
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
                <div class="ConnexionBox">
                    <h2 class="TitleConnexion">Créez Votre Compte</h2>
                    <form class="FormConnexion">
                        <input type="text" placeholder="Nom d'utilisateur" class="InputConnexion">
                        <input type="email" placeholder="Adresse e-mail" class="InputConnexion">
                        <div class="MotDePasse">
                            <input type="password" placeholder="Mot de passe" class="InputConnexion" ><i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="left" title="Le mot de passe doit contenir 13 caractères"></i>
                        </div>
                        <input type="password" placeholder="Confirmez le mot de passe" class="InputConnexion">
                        <input type="submit" value="S'inscrire" class="ConnexionSubmit">
                    </form>
                </div>
                <div class="RegisterBox">
                    <!-- <span>Vous avez déjà un compte ?</span><a href="connexion.php" class="LienSubscribe">Connexion</a> -->
					<span>Vous avez déjà un compte ?</span> <?php echo anchor ('Pages/view/connexion', 'Connexion', array('class' => 'LienSubscribe')); ?>
                </div>
            </div>
        </div>
    </div>
    <!--FIN FENETRE CONNEXION-->
	