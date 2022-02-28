<?php
/* Smarty version 4.1.0, created on 2022-02-25 12:02:57
  from 'C:\wamp64\www\Local-Bio\app\Views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621919d1f2ba16_44322857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d1980b7fa5fa2ee20d49a7b8bee2367a2dcb90' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\header.tpl',
      1 => 1645812173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621919d1f2ba16_44322857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2052047053621919d1f11405_11145650', "css");
?>


    <!--link rel="stylesheet" href="
								<?php if ($_smarty_tpl->tpl_vars['title']->value == 'Accueil') {
echo base_url('assets/css/accueil.css');?>

								<?php } elseif ($_smarty_tpl->tpl_vars['title']->value == 'A propos') {
echo base_url('assets/css/about.css');?>

								<?php } elseif ($_smarty_tpl->tpl_vars['title']->value == 'Boutique') {
echo base_url('assets/css/shop.css');?>

								<?php }?>"/-->
    <title>Local'Bio - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
    <!--BANDEAU CONNEXION-->
	
	<?php if (((isset($_SESSION['user_id'])))) {?>
			<div class="BandeauConnexion">
			<div class="container">
				<span>Bienvenu(e) <?php echo $_SESSION['user_firstname'];?>
</span>
				<div class="IconLogin">
					<a href="<?php echo base_url('index.php/users/profil');?>
"><i class="fas fa-user"></i></a>
					<a href="<?php echo base_url('index.php/users/disconnect');?>
"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
					<a href="<?php echo base_url('index.php/shop/');?>
"><i class="fas fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>


	<?php } else { ?>
		<div class="BandeauConnexion">
			<div class="container">
				<span>Bienvenu dans votre magasin</span>
				<div class="IconLogin">

					<a href="<?php echo base_url('index.php/users/connect');?>
"><i class="fas fa-user"></i></a>
					<a href="<?php echo base_url('index.php/shop/');?>
"><i class="fas fa-shopping-cart"></i></a>

				</div>
			</div>
		</div>

	<?php }?>

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
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['title']->value == 'Accueil') {?>active<?php }?>" href="<?php echo base_url('index.php/Pages/accueil');?>
">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['title']->value == 'Boutique') {?>active<?php }?>" aria-current="page" href="<?php echo base_url('index.php/shop/boutique');?>
">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['title']->value == 'A propos') {?>active<?php }?>" aria-current="page" href="<?php echo base_url('index.php/Pages/about');?>
">A propos</a>
                        </li>             
                    </ul>
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/localBio.png');?>
" alt="logo de la boutique"
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
<?php }
/* {block "css"} */
class Block_2052047053621919d1f11405_11145650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_2052047053621919d1f11405_11145650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link href="<?php echo base_url('assets/css/footer.css');?>
" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/header.css');?>
" rel="stylesheet"/>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php
}
}
/* {/block "css"} */
}
