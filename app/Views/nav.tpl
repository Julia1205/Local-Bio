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
                    <!--<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                </div>
            </nav>
        </div>
	</div>
