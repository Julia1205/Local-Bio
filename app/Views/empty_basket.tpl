{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/accueil.css')}"/>
	{/block}


	{block name="content"}
		<div class="container">
			<div class="col">
				<p class="text-center p-5">Veuillez remplir votre panier d'abord</p>
			</div>
			<img src="{base_url('assets/img/empty_basket.gif')}" class="img-fluid">
		</div>
	{/block}