{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/legume.css')}"/>
	{/block}


	{block name="content"}
	
		{foreach from=$smarty.session.products item=qte key=product_id}
		{$product_id} quantité : {$qte}
		{/foreach}

		
	{/block}
