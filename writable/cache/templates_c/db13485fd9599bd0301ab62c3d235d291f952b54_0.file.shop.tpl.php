<?php
/* Smarty version 4.1.0, created on 2022-02-21 13:51:18
  from 'C:\wamp64\www\Local-Bio\app\Views\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6213ed368e2ec5_64709134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db13485fd9599bd0301ab62c3d235d291f952b54' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\shop.tpl',
      1 => 1645473074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6213ed368e2ec5_64709134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9592888786213ed368d2f51_28003479', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20828674206213ed368d5ad5_42686035', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_9592888786213ed368d2f51_28003479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_9592888786213ed368d2f51_28003479',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/shop.css');?>
"/>
<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_20828674206213ed368d5ad5_42686035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20828674206213ed368d5ad5_42686035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--BANDEAU SHOP-->
    <div class="container-fluid ShopBandeau">
        <img src="<?php echo base_url('assets/img/BandeauShop.jpg');?>
" class="img-fluid">
    </div>
    <!--FIN BANDEAU SHOP-->
    <!--ARTICLE-->
    <div class="container">
        <div class="BoxChoice">
            <span>Affichage des résultats 1–12 sur 45</span>
            <div class="IconChoice">
                <i class="fas fa-th"></i>
                <i class="fas fa-list"></i>
            </div>
            <div class="Trie">Trier par dernier <i class="fas fa-angle-down"></i></div>
            <input type="text" placeholder="Recherche de produit" class="RechercherProduit">
        </div>
		<div class="container">
		                <div class="col-lg-offset-1 col-lg-1">
                    <div class="Categorie">
                        <h4 class="TitleCategorie">Catégorie</h4>
                        <div class="ChoixCategorie">
                            <ul class="ChoixCategorieListe">
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><a href="<?php echo base_url('index.php/shop/boutique/2');?>
">légumes</a></li>
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><a href="<?php echo base_url('index.php/shop/boutique/1');?>
">fruits</a></li>
                                <li class="ChoixCategorieNom"><i class="fas fa-angle-right"></i><a href="<?php echo base_url('index.php/shop/boutique/3');?>
">épices</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

					<div class="row">
					
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'objProduct');
$_smarty_tpl->tpl_vars['objProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objProduct']->value) {
$_smarty_tpl->tpl_vars['objProduct']->do_else = false;
?>
							<div class="col-lg-2">
									<div class="BorderBoxGreen">
										<div class="ArticleAchat">
											<img src="<?php echo base_url('assets/img');?>
/<?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_img;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_name;?>
" class="ImgArticle">
											<span class="TitleArticle"><?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_name;?>
</span>
											<span><?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_pu;?>
 €</span>
											<button class="BouttonAchatArticle" onclick="window.location.href ='legume.html';" >
												<span class="SpanAchat"><a href='<?php echo base_url('index.php/shop/details');?>
/<?php echo $_smarty_tpl->tpl_vars['objProduct']->value->url_name;?>
'>Voir l'article</a></span>
											</button>
										</div>
									</div>
								</div>			
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					</div>
			</div>
		</div>
	</div>
	
<?php
}
}
/* {/block "content"} */
}
