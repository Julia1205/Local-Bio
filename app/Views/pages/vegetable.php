<!--BANDEAU SHOP-->
    <div class="container-fluid ShopBandeau">
        <?php include('headband.php'); ?>
    </div>
    <!--FIN BANDEAU SHOP-->
    <!--ARTICLE-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="BoxOrangeImage">
                    <?php echo img(array('src'=>'images/chou-fleur.jpeg', 'alt'=> 'Orange', 'class'=> 'img-fluid OrangeProduit')); ?>
					
                </div>
            </div>
            <div class="col-lg-6">
                <div class="BoxTextProduit">
                    <h1 class="Tiltleproduct">Chou-Fleur</h1>
                    <div>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="Price">2 €</p>
                    <p class="Dexription">Somptueux, copieux et tentant pour la santé, notre granola biologique Biona
                        aux baies sauvages est exactement ce qu'il vous faut pour vous sortir du lit. Les bienfaits des
                        flocons d'avoine entiers roulés sont combinés à une variété de baies biologiques acidulées et
                        cuits en grappes croustillantes tout aussi nutritives.</p>
                    <h4 class="Poids">Poids</h4>
                    <ul class="PoidsMenu">
                        <li class="PoidsChoixFirst">0.5kg</li>
                        <li class="PoidsChoixFirst">1kg</li>
                        <li class="PoidsChoix">2 kilogrammes</li>
                        <li class="PoidsChoix">5 kilogrammes</li>
                    </ul>
                    <div class="ChoixProduitBox">
                        <div class="ChoixNumber">
                            <i class="fas fa-minus"></i>
                            <span class="NumberChoice">1</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="ButtonAddPanier">
                            <i class="fas fa-shopping-cart"></i>
                            <p class="AddPanier" href="panier.php">Ajouter au panier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Informations additionnelle</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Avis</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">L’orange ou
                orange douce est le fruit de l'oranger (Citrus sinensis L.) de la famille des Rutacées. Comme pour tous
                les agrumes, il s'agit d'une forme particulière de baie appelée hespéride. Il existe plusieurs variétés
                d’oranges classées en quatre groupes variétaux.
                Comestible, elle est réputée pour sa grande teneur en vitamine C, bien que cette dernière ne soit pas
                particulièrement haute comparée à d'autres fruits et légumes. C'est le quatrième fruit le plus cultivé
                au monde.
                L’orange a donné son nom à la couleur secondaire qui, sur le cercle chromatique, prend place entre le
                rouge et le jaune.</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table">
                    <tr>
                        <td class="TableCase">Poids</td>
                        <td>0,5 kg, 1 kg, 2 kg, 5 kg</td>
                    </tr>
                    <tr>
                        <td class="TableCase">Provenance</td>
                        <td>Alsace</td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <article>
                                <h4>2 avis pour Orange Fraîche</h4>
                                <div class="AvisBox">
                                    <?php echo img(array('src'=>'images/author2-176x176.png', 'alt'=> '', 'class'=> 'ProfilAvis')); ?>
                                    <div class="AvisBoxText">
                                        <p class="NameAvis">Pierre Meyer</p>
                                        <span class="DateAvis">5 aout 2021</span>
                                        <p class="TextAvis">Les bienfaits des flocons d'avoine entiers roulés sont
                                            combinés
                                            à une variété de
                                            baies biologiques.</p>
                                        <i class="fas fa-star Note"></i><i class="fas fa-star Note"></i><i
                                            class="fas fa-star Note"></i>
                                    </div>
                                </div>
                                <div class="AvisBox">
                                    <?php echo img(array('src'=>'images/author2-176x176.png', 'alt'=> '', 'class'=> 'ProfilAvis')); ?>
                                    <div class="AvisBoxText">
                                        <p class="NameAvis">Tom Butterlin</p>
                                        <span class="DateAvis">17 Janvier 2021</span>
                                        <p class="TextAvis">Les bienfaits des flocons d'avoine entiers roulés sont
                                            combinés
                                            à une variété de
                                            baies biologiques.</p>
                                        <i class="fas fa-star Note"></i><i class="fas fa-star Note"></i><i
                                            class="fas fa-star Note"></i>
                                    </div>
                                </div>

                            </article>
                            <article></article>
                        </div>
                        <div class="col-lg-6">
                            <div class="Box">
                                <p class="TextBackBold">Votre adresse email ne sera pas publiée. Les champs obligatoires sont marqués</p>
                                <p class="TextBackBold">Votre avis :</p>
                                <textarea class="InputText greenFocus"></textarea>
                                <label name="Name"></label>
                                <input type="text" name="Name" placeholder="Nom" class="Inputform">
                                <label name="Email"></label>
                                <input type="email" placeholder="E-mail" class="Inputform ">
                                <input type="submit" value="Envoyer" class="ButtonSubmit"> 
                                <div class="CheckBox">
                                    <label name="CheckBox">Enregistrez mon nom, mon e-mail et mon site Web dans ce navigateur pour mon prochain commentaire.</label>
                                    <input type="checkbox" class="CheckBoxStyle">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>