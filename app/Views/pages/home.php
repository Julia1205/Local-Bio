    <!--PAGE ACCEUIL-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="BoxTitle">
                        <div class="ContainerAccueil">
                            <h1 class="Title"><?php echo (esc($titrePrincipal)); ?></h1>
                            <h4 class="TexteTitle">la meilleur marque pour les aliments biologique</h4>
                            <div class="BouttonAchat">
                                <?php echo anchor ('Pages/view/shop', 'achetez maintenant', array('class' => 'TexteAchat')); ?>
								
                                <div class="CercleFleche">
                                    <?php echo img(array('src'=>'images/fleche.png', 'alt'=> 'fleche', 'class'=> 'FlecheAchat')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 OrangeBoxResponsive">
                    <div class="Orange">
						<?php echo img(array('src'=>'images/orange.png', 'alt'=> '', 'class'=> 'Avocat')); ?>
					</div>
                    <div class="FontOrange">
                       	<?php echo img(array('src'=>'images/FontOrange.png', 'alt'=> '', 'class'=> 'FontAvocat')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php echo img(array('src'=>'images/basilic1.png', 'alt'=> '', 'class'=> 'basilic1')); ?>
		<?php echo img(array('src'=>'images/basilic2.png', 'alt'=> '', 'class'=> 'basilic2')); ?>
		<?php echo img(array('src'=>'images/basilic3.png', 'alt'=> '', 'class'=> 'basilic3')); ?>
        <?php echo img(array('src'=>'images/basilic4.png', 'alt'=> '', 'class'=> 'basilic4')); ?>  
		<?php echo img(array('src'=>'images/basilic5.png', 'alt'=> '', 'class'=> 'basilic5')); ?>
	</div>
    <div class="ImageBasPage">
        <?php echo img(array('src'=>'images/slider.png', 'alt'=> 'slider', 'class'=> 'FondPage')); ?>
    </div>
    <!--FIN PAGE ACCEUIL-->
    <!--HAUT PAGE 2-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="Box1gauche">
                    <div class="Box1title">
                        <h4>Bénéficiez de 10% de remise sur les légumes</h4>
                        <p class="ParagrapheBox">Achetez notre sélection de légumes frais biologiques à prix
                            réduit.
                            10% de remise sur tous les légumes.</p>
                        <div class="LienBox1">
                            <?php echo anchor ('Pages/view/shop', 'achetez maintenant', array('class' => 'TexteLienBox1')); ?>
                        </div>
                    </div>
                    <div class="Box1Image">
						<?php echo img(array('src'=>'images/banner-fixed1.png', 'alt'=> '', 'class'=> 'LegumeImage2')); ?>
                        <?php echo img(array('src'=>'images/chou-fleur.png', 'alt'=> '', 'class'=> 'LegumeImage')); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Box2Droite">
                    <div class="Box1title">
                        <h4>Obtenez des fruits frais du jardin</h4>
                        <p class="ParagrapheBox">Achetez notre sélection de légumes frais biologiques à prix
                            réduit.
                            10% de remise sur tous les légumes.</p>
                        <div class="LienBox2">
                            <p class="TexteLienBox2">achetez maintenant</p>
                        </div>
                    </div>
                    <div class="Box1Image">
						<?php echo img(array('src'=>'images/farm frsh.png', 'alt'=> '', 'class'=> 'LegumeImage2')); ?>
						<?php echo img(array('src'=>'images/baie.png', 'alt'=> '', 'class'=> 'LegumeImage')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN HAUT PAGE 2-->
    <!--BAS PAGE 2-->
    <div class="container containerPage2">
        <div class="row">
            <div class="col-sm-6">
                <div class="BoxGaucheImage">
                    <?php echo img(array('src'=>'images/about-img2.png', 'alt'=> 'fruitsetlégumes', 'class'=> 'ImageFruitsEtLegume')); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="BoxDroiteTexte">
                    <p class="Pvert">~ À propos de nous ~</p>
                    <h2 class="Title2page2">Nous sommes dans une démarche de coopération avec les agriculteurs</h2>
                    <h4 class="Title4page2">Local'Bio est une entreprise familiale fondée en 2004 qui
                        gère des
                        supermarchés biologiques</h4>
                    <p class="Pgris">Bio signifie cultiver notre nourriture, qui doit nous nourrir, sans aides
                        chimiques
                        pendant le processus de croissance telles que les engrais,
                        les pesticides, les fongicides, les herbicides, les larbicides, etc.</p>
                    <div class="BoxBasPage2">
                        <div class="carotte">
                            <div class="Logocarotte">
                                <?php echo img(array('src'=>'images/organic-food.png', 'alt'=> '', 'class'=> '')); ?>
                            </div>
                            <div class="PourquoiBio">
                                <h6 class="TitleBaspage2">Pourquoi Bio ?</h6>
                                <p class="TextBaspage2">Nous faisons de la place aux soins personnels aujourd'hui
                                    avec un
                                    plan.</p>
                            </div>
                        </div>
                        <div class="feuille">
                            <div class="Logofeuille">
                                <?php echo img(array('src'=>'images/organic-food2.png', 'alt'=> '', 'class'=> '')); ?>
                            </div>
                            <div class="PourquoiBio">
                                <h6 class="TitleBaspage2">Produits de spécialité</h6>
                                <p class="TextBaspage2">Nous faisons de la place aux soins personnels aujourd'hui
                                    avec un
                                    plan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN BAS PAGE 2-->
    <div class="SliderTop"></div>
    <div class="FondPage3">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="BoxTopPage3Title">
                        <p class="Pvert">~ Catégories ~</p>
                        <h4 class="Title2page2">Les différentes catégories sont soigneusement sélectionnées par les producteurs</h4>
                    </div>
                </div>
            </div>
            <div class="row ProduitSélectionBox">
                <div class="col-lg-offset-2 col-lg-2">
                    <div class="SliderProduit1">
                        <div class="BorderColor1">
                            <div class="BoxLettre">
                                <span class="lettre">L</span>
                                <?php echo img(array('src'=>'images/legume.png', 'alt'=> '', 'class'=> 'PngSlider')); ?>
                            </div>
                            <h6 class="TitleBaspage2">Les légumes</h6>
                            <p class="TextBaspage2">achats auprès des agriculteurs familiaux sélectionnés qui
                                pratique
                                l'agriculture biologique </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="SliderProduit1">
                        <div class="BorderColor2">
                            <div class="BoxLettre">
                                <span class="lettre2">F</span>
                                <?php echo img(array('src'=>'images/OrangeBox.png', 'alt'=> '', 'class'=> 'PngSlider')); ?>
                            </div>
                            <h6 class="TitleBaspage2">Les fruits</h6>
                            <p class="TextBaspage2">achats auprès des agriculteurs familiaux sélectionnés qui
                                pratique
                                l'agriculture biologique </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="SliderProduit1">
                        <div class="BorderColor4">
                            <div class="BoxLettre">
                                <span class="lettre4">E</span>
                                <?php echo img(array('src'=>'images/poivres.png', 'alt'=> '', 'class'=> 'PngSlider')); ?>
                            </div>
                            <h6 class="TitleBaspage2">Les épices</h6>
                            <p class="TextBaspage2">achats auprès des agriculteurs familiaux sélectionnés qui
                                pratique
                                l'agriculture biologique </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN PAGE3-->