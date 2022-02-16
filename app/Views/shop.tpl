{extends file="layout.tpl"}


{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/shop.css')}"/>
{/block}

{block name="content"}

	{foreach from=$products item=objProduct}
	
		{$objProduct->product_name} 
		{$objProduct->product_desc} 
		{$objProduct->product_pu}
		<img src="{base_url('assets/img')}/{$objProduct->product_img}"/>
		
	{/foreach}
	
{/block}