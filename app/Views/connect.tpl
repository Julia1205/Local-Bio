{extends file="layout.tpl"}

{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/accueil.css')}"/>
{/block}


{block name="content"}
{$form_open}
    <div class="row mb-3">
		{$label_email}
			<div class="col-sm-10">
				{$form_email}
			</div>
		</div>
		
{$label_password}
{$form_password}
{$form_submit}
{$form_close}

{/block}