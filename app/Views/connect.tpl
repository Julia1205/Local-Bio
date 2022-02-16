{extends file="layout.tpl"}

{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/accueil.css')}"/>
{/block}


{block name="content"}
{$form_open}
{$label_email}
{$form_email}
{$label_password}
{$form_password}
{$form_submit}
{$form_close}
{/block}