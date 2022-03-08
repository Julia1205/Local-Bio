{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/legume.css')}"/>
	{/block}

	{block name="content"}	
		<div class="container mt-5">
			<table class="tftable" border="1">
				<tr><th>Nom du produit</th>
				<th>Prix unitaire</th>
				<th>Quantité</th>
				<th>Prix H.T.</th>
				<th>Prix T.T.C.</th></tr>
			
			{foreach from=$arrProduct item=detProduct}
					<tr><td>{$detProduct->product_name}</td>
					<td>{$detProduct->product_pu} €</td>
					<td>{$detProduct->qty}</td>
					<td>{$detProduct->prix_totalHT} €</td>
					<td>{$detProduct->prix_totalTTC} €</td>
					</tr>
			{/foreach}
			</table>
			Taux de TVA : 5.50%
			<br><br>Total HT : {$totalHT} €<br>
			Total TVA : {$totalTVA} €<br>
			Total TTC : {$totalTTC} €<br>
		</div>
	{/block}
