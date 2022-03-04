<?php
/* Smarty version 4.1.0, created on 2022-03-04 04:30:51
  from 'C:\wamp64\www\Local-Bio\app\Views\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6221ea5bb459a4_33259101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db13485fd9599bd0301ab62c3d235d291f952b54' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\shop.tpl',
      1 => 1646388513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6221ea5bb459a4_33259101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15788007456221ea5bb2fcc2_99438054', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7417655046221ea5bb33c59_80498784', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_15788007456221ea5bb2fcc2_99438054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_15788007456221ea5bb2fcc2_99438054',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/shop.css');?>
"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/banniere.css');?>
"/>
<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_7417655046221ea5bb33c59_80498784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7417655046221ea5bb33c59_80498784',
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
            <?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['label_product']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['form_product']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

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
											<p id="jscript"></p>
											<button class="BouttonAchatArticle">
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
