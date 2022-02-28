<?php
/* Smarty version 4.1.0, created on 2022-02-28 12:40:06
  from 'C:\wamp64\www\Local-Bio\app\Views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621d1706e7d103_74342557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d1980b7fa5fa2ee20d49a7b8bee2367a2dcb90' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\header.tpl',
      1 => 1646073596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621d1706e7d103_74342557 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1992080028621d1706e70538_72981526', "css");
?>

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
    <!--FIN BANDEAU CONNEXION--><?php }
/* {block "css"} */
class Block_1992080028621d1706e70538_72981526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1992080028621d1706e70538_72981526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<link href="<?php echo base_url('assets/css/footer.css');?>
" rel="stylesheet" />
		<link href="<?php echo base_url('assets/css/header.css');?>
" rel="stylesheet"/>
		<link href="<?php echo base_url('assets/css/nav.css');?>
" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
			integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
			crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php
}
}
/* {/block "css"} */
}
