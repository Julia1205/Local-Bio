{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/Inscription.css')}"/>
	{/block}


	{block name="content"}
			<div class="container">

			{if count($arrErrors) > 0}
					<div class="error">
					
							{foreach from=$arrErrors item=$strError}
							   <p>{$strError}</p>
							{/foreach}
					</div>
			{/if}
			<div class="row">
			
				<div class="col-lg-offset-4 col-lg-4">
					<div class="text-center">
						{$form_open}
							{$label_name}<br>
								{$form_name}<br>
							{$label_firstname}<br>
								{$form_firstname}<br>
							{$label_email}<br>
								{$form_email}<br>
							{$label_password}<br>
								{$form_password}<br>
							{$label_passwordConfirmed}<br>
								{$form_passwordConfirmed}<br>
							{$label_houseNumber}<br>
								{$form_houseNumber}<br>
							{$label_address}<br>
								{$form_address}<br>
							{$label_city}<br>
								{$form_city}<br>
							{$label_cp}<br>
								{$form_cp}<br>
							{$label_phone}<br>
								{$form_phone}<br><br>
							{$form_submit}
						{$form_close}
					</div>
				</div>
			</div>
		</div>

	{/block}