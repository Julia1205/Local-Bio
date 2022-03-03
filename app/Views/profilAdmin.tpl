{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/profil.css')}"/>
	{/block}


	{block name="content"}
	<br><br>
	    <section class="profilBox">
			<div>
				<div class="boxInfo">
					<div class="mx-auto">
						<a class="abonner" href="{base_url('index.php/Products/listProducts')}" style="height 50px">Liste des produits</a>
						<a class="abonner" href="{base_url('index.php/Products/productAdd')}" style="height 50px">Ajouter un produit</a>
						
					</div>
				</div>		
			</div>	
		</section>
				

	{/block}