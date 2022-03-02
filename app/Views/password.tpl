{extends file="layout.tpl"}

{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/profil.css')}"/>
{/block}


{block name="content"}
{$label_password}
{$form_password}
{$label_passwordConfirmed}
{$form_passwordConfirmed}
{/block}