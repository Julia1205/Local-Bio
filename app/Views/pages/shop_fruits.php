    <!--BANDEAU SHOP-->
    <div class="container-fluid ShopBandeau">
        <?php include('headband.php'); ?>
    </div>
    <!--FIN BANDEAU SHOP-->
    <!--ARTICLE-->
    <div class="container">
        <div class="BoxChoice">
            <span>Affichage des résultats 1–12 sur 45</span>
            <div class="IconChoice">
                <i class="fas fa-th"></i>
                <i class="fas fa-list"></i>
            </div>
            <div class="Trie">Trier par dernier <i class="fas fa-angle-down"></i></div>
            <input type="text" placeholder="Recherche de produit" class="RechercherProduit">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/OrangeBox.png', 'alt'=> 'Orange', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Orange</span>
                            <span>0,50 €</span>
                            <!-- <button class="BouttonAchatArticle" onclick="window.location.href ='product.php';" > -->
							<!-- <span class="SpanAchat">Voir l'article</span> -->
							<button class="BouttonAchatArticle"><?php echo anchor ('Pages/view/product', '<span class="SpanAchat">Voir l\'article</span>'); ?>
							
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/PAMPLEMOUSSE.jpeg', 'alt'=> 'Pamplemousse', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Pamplemousse</span>
                            <span>1.50 €</span>
                            <div class="BouttonAchatArticle">
                                <span class="SpanAchat" href="product.html">Voir l'article</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/Peche.jpeg', 'alt'=> 'Pêche', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Pêche</span>
                            <span>1 €</span>
                            <div class="BouttonAchatArticle">
                                <span class="SpanAchat">Voir l'article</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-1">
                    <div class="Categorie">
                        <h4 class="TitleCategorie">Catégorie</h4>
                        <div class="ChoixCategorie">
                            <ul class="ChoixCategorieListe">
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><?php echo anchor ('Pages/view/shop', 'Légumes'); ?></li>
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><?php echo anchor ('Pages/view/shop_fruits', 'Fruits'); ?></li>
								<li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><?php echo anchor ('Pages/view/shop_epices', 'Epices'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/OrangeBox.png', 'alt'=> 'Orange', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Orange</span>
                            <span>0,50 €</span>
                            <button class="BouttonAchatArticle" onclick="window.location.href ='product.php';" >
                                <span class="SpanAchat">Voir l'article</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/PAMPLEMOUSSE.jpeg', 'alt'=> 'Pamplemousse', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Pamplemousse</span>
                            <span>1.50 €</span>
                            <div class="BouttonAchatArticle">
                                <span class="SpanAchat" href="product.html">Voir l'article</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/Peche.jpeg', 'alt'=> 'Pêche', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Pêche</span>
                            <span>1 €</span>
                            <div class="BouttonAchatArticle">
                                <span class="SpanAchat">Voir l'article</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/OrangeBox.png', 'alt'=> 'Orange', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Orange</span>
                            <span>0,50 €</span>
                            <button class="BouttonAchatArticle" onclick="window.location.href ='product.php';" >
                                <span class="SpanAchat">Voir l'article</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/PAMPLEMOUSSE.jpeg', 'alt'=> 'Pamplemousse', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Pamplemousse</span>
                            <span>1.50 €</span>
                            <div class="BouttonAchatArticle">
                                <span class="SpanAchat" href="product.html">Voir l'article</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-2">
                    <div class="BorderBoxGreen">
                        <div class="ArticleAchat">
                            <?php echo img(array('src'=>'images/Peche.jpeg', 'alt'=> 'Pêche', 'class'=> 'ImgArticle')); ?>
                            <span class="TitleArticle">Pêche</span>
                            <span>1 €</span>
                            <div class="BouttonAchatArticle">
                                <span class="SpanAchat">Voir l'article</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>