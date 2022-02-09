    <!--FOOTER-->
    <section>
        <div class="BoxFooter">
            <div class="BoxImageFooter1"></div>
            <div class="BoxImageFooter2">
                <div class="container">
                    <div class="BoxSubscribe">
                        <div class="subscribe">
                            <span>Abonnez-vous a notre newsletter</span>
                            <button class="abonner">S'abonner</button>
                        </div>
                    </div>
                    <div class="BoxLien">
                        <div>
                            <h4 class="TitleFooter">Liens</h4>
                            <!-- <li class="LienFooter"><a href="accueil.php">Accueil</a></li> -->
							<li><?php echo anchor ('Pages/view/home', 'Accueil', array('class' => 'LienFooter')); ?></li>
							<li><?php echo anchor ('Pages/view/shop', 'boutique', array('class' => 'LienFooter')); ?></li>
							<li><?php echo anchor ('Pages/view/about', 'A propos', array('class' => 'LienFooter')); ?></li>
                        </div>
                        <div>
                            <h4 class="TitleFooter">Informations</h4>
                            <li>48 rue de la promenade, Colmar
                            </li>
                            <li>1-888-452-1505</li>
                            <li>Heures d'ouverture:</li>
                            <li>Lun – Sam : 8h – 17h,
                                Dimanche : FERMÉ
                            </li>
                        </div>
                        <div>
                            <h4 class="TitleFooter">Instagram</h4>
							<?php echo img(array('src'=>'images/potager.jpg', 'alt'=> 'potager', 'class'=> 'potagerPhoto')); ?>
							<?php echo img(array('src'=>'images/potager2.jpg', 'alt'=> 'potager', 'class'=> 'potagerPhoto')); ?>
							<?php echo img(array('src'=>'images/potager3.jpg', 'alt'=> 'potager', 'class'=> 'potagerPhoto')); ?>
							<?php echo img(array('src'=>'images/potager4.jpg', 'alt'=> 'potager', 'class'=> 'potagerPhoto')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
