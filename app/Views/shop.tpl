{extends file="layout.tpl"}

{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/shop.css')}"/>
{/block}

{block name="content"}

	{foreach from=$products item=objProduct}
		{$objProduct->product_name} 
	{/foreach}
	
{/block}