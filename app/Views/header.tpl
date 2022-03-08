<!DOCTYPE html>
<html lang="fr-FR">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		{block name="css"}
			<link href="{base_url('assets/css/footer.css')}" rel="stylesheet" />
			<link href="{base_url('assets/css/header.css')}" rel="stylesheet"/>
			<link href="{base_url('assets/css/nav.css')}" rel="stylesheet" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
				integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
				crossorigin="anonymous" referrerpolicy="no-referrer" />
		{/block}
		<title>Local'Bio - {$title}</title>
	</head>

	<body>
		<!--BANDEAU CONNEXION-->
		
		{if (isset($smarty.session.user_id))}
				<div class="BandeauConnexion">
				<div class="container">
					<span>Bienvenu(e) {$smarty.session.user_firstname}</span>
					<div class="IconLogin">
						<a href="{base_url('index.php/users/profil')}"><i class="fas fa-user"></i></a>
						<a href="{base_url('index.php/users/disconnect')}"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
						<a href="{base_url('index.php/cart/panier')}"><i class="fas fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
		{else}
			<div class="BandeauConnexion">
				<div class="container">
					<span>Bienvenu dans votre magasin</span>
					<div class="IconLogin">

						<a href="{base_url('index.php/users/connect')}"><i class="fas fa-user"></i></a>
						<a href="{base_url('index.php/cart/panier')}"><i class="fas fa-shopping-cart"></i></a>

					</div>
				</div>
			</div>
		{/if}
		<!--FIN BANDEAU CONNEXION-->