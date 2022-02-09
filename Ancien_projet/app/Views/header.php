<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo($strCSSfile);?>.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Local'Bio - {$strTitle}</title>
</head>

<?php
$strTitle = "Local'Bio - ";
?>
<body>
    <!--BANDEAU CONNEXION-->
    <div class="BandeauConnexion">
        <div class="container">
            <span>Bienvenue dans votre magasin</span>
            <div class="IconLogin">
                <a href="connexion.html"><i class="fas fa-user"></i></a>
                <a><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
    <!--FIN BANDEAU CONNEXION-->
    <!--NAVBAR-->
    <div class="NavBarBox">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {if ($strPage eq 'Accueil')}active{/if}" href="index.tpl">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {if ($strPage eq 'Boutique')}active{/if}" aria-current="page" href="shop.html">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {if ($strPage eq 'A propos')}active{/if}" aria-current="page" href="about.html">A propos</a>
                        </li>
                
                    </ul>
                    <!--<a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo de la boutique"
                    class="LogoNavBar"></a>-->
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!--FIN NAVBAR-->
    <!--FENETRE CONNEXION-->
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
                <div class="ConnexionBox">
                    <h2 class="TitleConnexion">{$strH2}</h2>