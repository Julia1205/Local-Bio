{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/Connexion.css')}"/>
	{/block}


	{block name="content"}
		{if count($arrErrors) > 0}
			<div class="error">
					{foreach from=$arrErrors item=$strError}
					   <p>{$strError}</p>
					{/foreach}
			</div>
		{/if}				
			{$form_open}	
				<div class="row mb-3">			
					{$label_email}		
					<div class="col-sm-10">				
						{$form_email}
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-sm-2">
						{$label_password}
					</div>
					<div class="col-sm-10">
						{$form_password}
					</div>
				</div>
					{$form_submit}
			{$form_close}
			<div class="RegisterBox">
				<span></span><a href="{base_url('index.php/users/create')}" class="LienSubscribe">S'inscrire</a>
			</div>
	{/block}