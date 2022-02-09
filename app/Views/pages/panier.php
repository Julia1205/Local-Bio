    <!--SECTION-->
    <section class="container">
        <div class="BoxTitle">
            <h2>Votre Panier</h2>
        </div>
        <div class="BoxReduction">
            <span class="spanBlack">Ajouter 1 article de plus à cette commande et nous appliquerons une réduction de 15% sur ce type de produit.</span>
        </div>
        <ul class="ulPanier">
            <li>PRODUIT</li>
            <li>ARTICLE</li>
            <li>PRIX</li>
        </ul>
        <article class="row">
            <div class="BoxProduit">
                <div class="BoxShadowArticle">
                    <?php echo img(array('src'=>'images/legume.png', 'alt'=> 'chou', 'class'=> 'ImageProduit')); ?>
                </div>
                <div class="BoxInfoArticle">
                    <h4>Chou - Alsace</h4>
                    <span>3,50€</span>
                    <span>Pièces: 2 pièces</span>
                </div>
            </div>
                <div class="Nombreprix">
                    <i class="fas fa-minus"></i>
                    <span class="NumberChoice">1</span>
                    <i class="fas fa-plus"></i>
                    <div class="prix">
                        <span>3,50€</span>
                    </div>
                </div>
        </article>
        <div class="Achat">
            <span>Livraison vers le 3 - 7 janvier
                avec la livraison standard</span>
            <button class="AchatBouton">Payer 3,50€</button>
        </div>
    </section>
    <!--FIN SECTION-->