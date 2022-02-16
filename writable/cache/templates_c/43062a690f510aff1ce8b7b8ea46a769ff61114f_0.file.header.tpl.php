<?php
/* Smarty version 4.1.0, created on 2022-02-15 09:22:15
  from 'C:\wamp64\www\Test_Local-Bio\app\Views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620bc52762ad75_04786298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43062a690f510aff1ce8b7b8ea46a769ff61114f' => 
    array (
      0 => 'C:\\wamp64\\www\\Test_Local-Bio\\app\\Views\\header.tpl',
      1 => 1644938532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620bc52762ad75_04786298 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/accueil.css');?>
"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.css');?>
"/>
    <title>Local'Bio - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
    <!--BANDEAU CONNEXION-->
    <div class="BandeauConnexion">
        <div class="container">
            <span>Bienvenue dans votre magasin</span>
            <div class="IconLogin">
                <a href="connexion.html"><i class="fas fa-user"></i></a>
                <a href="panier.html"><i class="fas fa-shopping-cart"></i></a>
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
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['title']->value == 'Accueil') {?>active<?php }?>" href="home.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['title']->value == 'Boutique') {?>active<?php }?>" aria-current="page" href="shop.html">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['title']->value == 'A propos') {?>active<?php }?>" aria-current="page" href="about.html">A propos</a>
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
}
