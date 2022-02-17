{extends file="layout.tpl"}

	{block name="css" append}
		<link rel="stylesheet" href="{base_url('assets/css/Connexion.css')}"/>
	{/block}


	{block name="content"}
		<div class="container">
			{$form_open}
				<div class="mx-auto">
					<div class="row mb-3">
						<div class="col-sm-2">
							{$label_email}
						</div>
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
				</div>
			{$form_close}
			<div class="RegisterBox">
				<span></span><a href="{base_url('index.php/users/create')}" class="LienSubscribe">S'inscrire</a>
			</div>
		</div>


	{/block}