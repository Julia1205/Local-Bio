{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/profil.css')}"/>
	{/block}


	{block name="content"}
	<br><br>
	    <section class="profilBox">
			<div>
				<div class="boxInfo">
					<div>
						{if count($arrErrors) > 0}
								<div class="error">
										{foreach from=$arrErrors item=$strError}
										   <p>{$strError}</p>
										{/foreach}
								</div>
						{/if}
						<div class="text-center">
								{$form_open}
									{$label_name} <br>
										{$form_name} <br>
									{$label_firstname} <br>
										{$form_firstname} <br>
									{$label_email} <br>
										{$form_email} <br>
									{$label_houseNumber} <br>
										{$form_houseNumber}<br>
									{$label_address}<br>
										{$form_address}<br>
									{$label_phone}<br>
										{$form_phone}<br><br>
									{$form_submit}<br><br>
								{$form_close}
								<a class="abonner" href="{base_url('index.php/Users/password')}" style="height 50px">Changer mdp</a>
								<a class="abonner" href="{base_url('index.php/Users/deleteAccount')}" style="height 50px">Supprimer son compte</a>
						</div>
					</div>		
				</div>	
			</section>
				

	{/block}