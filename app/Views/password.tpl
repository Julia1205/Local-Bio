{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/profil.css')}"/>
	{/block}


	{block name="content"}
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
								{$label_oldPassword}<br>
								{$form_oldPassword}<br><br>
								{$label_password}<br>
								{$form_password}<br>
								{$label_passwordConfirmed}<br>
								{$form_passwordConfirmed}<br><br>
								{$form_submit}
								<br><br>
								{$form_close}
							</div>
						</div>
					</div>
				</div>
			</section>
	{/block}