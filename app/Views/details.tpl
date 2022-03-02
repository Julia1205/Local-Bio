{extends file="layout.tpl"}

{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/legume.css')}"/>
{/block}


{block name="content"}
    <!--BANDEAU SHOP-->
    <div class="container-fluid ShopBandeau">
        <img src="{base_url('assets/img/BandeauShop.jpg')}" class="img-fluid">
    </div>
    <!--FIN BANDEAU SHOP-->

	<div class="container">
	
        <div class="row">
            <div class="col-lg-6">
                <div class="BoxOrangeImage">
				{foreach from=$product item=objProduct}
                    <img src="{base_url('assets/img')}/{$objProduct->product_img}" class="img-fluid OrangeProduit" alt="{$objProduct->product_name}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="BoxTextProduit">
				
                    <h1 class="Tiltleproduct">{$objProduct->product_name}</h1>
                    <div>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="Price">{$objProduct->product_pu} €</p>
                    <p class="Dexription">{$objProduct->product_desc}</p>
                    <h4 class="Poids">Conditionnement en emballage recyclé de </h4>
                    <ul class="PoidsMenu">
                        <li class="PoidsChoixFirst"></li>
                        <li class="PoidsChoixFirst">{$objProduct->product_conditionning}kg</li>
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
                            <a class="AddPanier" href="panier.html">Ajouter au panier</p>
                        </div>
                    </div>
				{/foreach}
                </div>
            </div>
		</div>
	</div>
{/block}