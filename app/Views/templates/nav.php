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
                           	<?php echo anchor ('Pages/view/home', 'Accueil', array('class' => 'nav-link active')); ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor ('Pages/view/shop', 'Boutique', array('class' => 'nav-link aria-current="page"')); ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor ('Pages/view/about', 'A propos', array('class' => 'nav-link aria-current="page"')); ?>
                        </li>
                
                    </ul>
					<?php echo anchor('Pages/view/home', img(array('src'=>'images/localBio.png', 'alt'=>'logo de la boutique', 'class'=> 'LogoNavBar')), 'class="navbar-brand"'); ?>
					<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!--FIN NAVBAR-->