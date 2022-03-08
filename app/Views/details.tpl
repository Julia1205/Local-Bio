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
						<p class="Desription">{$objProduct->product_desc} </p>
						<h4 class="Poids">Conditionnement en emballage recyclé de </h4>
						<!--<ul class="PoidsMenu">
							<li class="PoidsChoixFirst"></li>
							<li class="PoidsChoixFirst">{$objProduct->product_conditionning}kg</li>-->
							<li class="PoidsChoix">{$objProduct->product_conditioning} kilogramme(s)</li>
							<!--<li class="PoidsChoix">5 kilogrammes</li>
						</ul>-->
						<p id="jscript"></p>
						{$form_open}
						<div class="ChoixProduitBox">
							<div class="ChoixNumber">
						
								
								{$input_quantity}
								
							</div>
							
							<div class="ButtonAddPanier">
								<i class="fas fa-shopping-cart"></i>
								{*$form_hidden*}							
								{$form_submit}
								

							</div>
						</div>
						{$form_close}
					{/foreach}
					</div>
				</div>
			</div>
		</div>
	{/block}
	{block name=js append}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
	{if (isset($smarty.session.user_id))}
	{else}
			$("#formulaire_open").click(function(){
				$("#formulaire_open").attr('action', "") 
				$("#jscript").html("Veuillez vous <a href='{base_url('index.php/Users/connect')}'>connecter</a>")
				$("#jscript").css("border", "2px solid red")
				return false
			});

	{/if}
	</script>
	{/block}