{extends file="layout.tpl"}


{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/shop.css')}"/>
	<link rel="stylesheet" href="{base_url('assets/css/banniere.css')}"/>
{/block}

{block name="content"}
    <!--BANDEAU SHOP-->
    <div class="container-fluid ShopBandeau">
        <img src="{base_url('assets/img/BandeauShop.jpg')}" class="img-fluid">
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
            {$form_open}
			{$label_product}
			{$form_product}
			{$form_submit}
			{$form_close}
        </div>
		<div class="container">
		                <div class="col-lg-offset-1 col-lg-1">
                    <div class="Categorie">
                        <h4 class="TitleCategorie">Catégorie</h4>
                        <div class="ChoixCategorie">
                            <ul class="ChoixCategorieListe">
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><a href="{base_url('index.php/shop/boutique/2')}">légumes</a></li>
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><a href="{base_url('index.php/shop/boutique/1')}">fruits</a></li>
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><a href="{base_url('index.php/shop/boutique/3')}">épices</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

					<div class="row">
					
						{foreach from=$products item=objProduct}
							<div class="col-lg-2">
									<div class="BorderBoxGreen">
										<div class="ArticleAchat">
											<img src="{base_url('assets/img')}/{$objProduct->product_img}" alt="{$objProduct->product_name}" class="ImgArticle">
											<span class="TitleArticle">{$objProduct->product_name}</span>
											<span>{$objProduct->product_pu} €</span>
											<p id="jscript"></p>
											<button class="BouttonAchatArticle">
												<span class="SpanAchat"><a href='{base_url('index.php/shop/details')}/{$objProduct->url_name}'>Voir l'article</a></span>
											</button>
										</div>
									</div>
								</div>			
						{/foreach}
					</div>
			</div>
		</div>
	</div>
	
{/block}