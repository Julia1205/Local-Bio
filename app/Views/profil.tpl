{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/Inscription.css')}"/>
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
								{$form_open}
									{$label_name}
										{$form_name}
									{$label_firstname}
										{$form_firstname}
									{$label_email}
										{$form_email}
									{$label_password}
										{$form_password}
									{$label_passwordConfirmed}
										{$form_passwordConfirmed}
									{$label_houseNumber}
										{$form_houseNumber}
									{$label_address}
										{$form_address}
									{$label_city}
										{$form_city}
									{$label_cp}
										{$form_cp}
									{$label_phone}
										{$form_phone}
									{$form_submit}
								{$form_close}

	{/block}