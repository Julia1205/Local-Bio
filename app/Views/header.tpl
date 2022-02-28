<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	{block name="css"}
	<link href="{base_url('assets/css/footer.css')}" rel="stylesheet" />
	<link href="{base_url('assets/css/header.css')}" rel="stylesheet"/>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	{/block}

    <!--link rel="stylesheet" href="
								{if $title eq 'Accueil'}{base_url('assets/css/accueil.css')}
								{elseif $title eq 'A propos'}{base_url('assets/css/about.css')}
								{elseif $title eq 'Boutique'}{base_url('assets/css/shop.css')}
								{/if}"/-->
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
					<a href="{base_url('index.php/shop/')}"><i class="fas fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
	{else}
		<div class="BandeauConnexion">
			<div class="container">
				<span>Bienvenu dans votre magasin</span>
				<div class="IconLogin">

					<a href="{base_url('index.php/users/connect')}"><i class="fas fa-user"></i></a>
					<a href="{base_url('index.php/shop/')}"><i class="fas fa-shopping-cart"></i></a>

				</div>
			</div>
		</div>
	{/if}
    <!--FIN BANDEAU CONNEXION-->
    <!--NAVBAR-->
    <div class="NavBarBox" style="background-color: white;">
        <div class="container" style="background-color: white;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: white;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {if $title eq 'Accueil'}active{/if}" href="{base_url('index.php/Pages/accueil')}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {if $title eq 'Boutique'}active{/if}" aria-current="page" href="{base_url('index.php/shop/boutique')}">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {if $title eq 'A propos'}active{/if}" aria-current="page" href="{base_url('index.php/Pages/about')}">A propos</a>
                        </li>             
                    </ul>
                    <a class="navbar-brand" href="#"><img src="{base_url('assets/img/localBio.png')}" alt="logo de la boutique"
                    class="LogoNavBar"></a>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!--FIN NAVBAR-->