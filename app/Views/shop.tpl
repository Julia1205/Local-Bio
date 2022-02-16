{extends file="layout.tpl"}


{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/shop.css')}"/>
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
            <input type="text" placeholder="Recherche de produit" class="RechercherProduit">
        </div>
		<div class="container">
				{foreach from=$products item=objProduct}
						<!--{$objProduct|@var_dump}-->

							 <div class="row">
								<div class="col-lg-2">
							<div class="BorderBoxGreen">
									<div class="ArticleAchat">
										<img src="{base_url('assets/img')}/{$objProduct->product_img}" alt="{$objProduct->product_name}" class="ImgArticle">
										<span class="TitleArticle">{$objProduct->product_name}</span>
										<span>{$objProduct->product_pu} €</span>
										<button class="BouttonAchatArticle" onclick="window.location.href ='legume.html';" >
											<span class="SpanAchat">Voir l'article</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					{/foreach}
			</div>
		</div>
	</div>
	
{/block}