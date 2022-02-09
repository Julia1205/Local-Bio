<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/all.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/' . $fileCss); ?>">
   
    <title><?php echo(esc($titrePage)); ?></title>
</head>

<body>
    <!--BANDEAU CONNEXION-->
    <div class="BandeauConnexion">
        <div class="container">
            <span>Bienvenue dans votre magasin</span>
            <div class="IconLogin">
                <?php echo anchor ('Pages/view/connexion', '<i class="fas fa-user"></i>'); ?>
				<?php echo anchor ('Pages/view/panier', '<i class="fas fa-shopping-cart"></i>'); ?>
            </div>
        </div>
    </div>
    <!--FIN BANDEAU CONNEXION-->