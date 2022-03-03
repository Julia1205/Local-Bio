{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/profil.css')}"/>
	{/block}


	{block name="content"}
				{if count($arrErrors) > 0}
					<div class="error">
					
							{foreach from=$arrErrors item=$strError}
							   <p>{$strError}</p>
							{/foreach}
					</div>
			{/if}

			<section class="profilBox">
				<div>
					<div class="boxInfo">
						<div>
							<div class="text-center">
								{$form_open}
								{$label_product_name}<br>
								
								{$form_product_name}<br>
								
								{$label_product_desc}<br>
								
								{$form_product_desc}<br>
								
								{$label_product_pu}<br>
								
								{$form_product_pu}<br>
								
								{$label_product_stock}<br>
								
								{$form_product_stock}<br>
								{$label_category_id}<br>
								{$form_category_id}<br>
								{$label_product_conditioning}<br>
								{$form_product_conditioning}<br>
								{$label_product_img}<br>
								{$form_product_img}<br><br>

								{$form_submit}
								<br><br>
								{$form_close}
							</div>
						</div>
					</div>
				</div>
			</section>

	{/block}