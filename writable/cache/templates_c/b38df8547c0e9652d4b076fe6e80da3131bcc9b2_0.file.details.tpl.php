<?php
/* Smarty version 4.1.0, created on 2022-02-21 13:55:58
  from 'C:\wamp64\www\Local-Bio\app\Views\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6213ee4e6351e5_18019823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b38df8547c0e9652d4b076fe6e80da3131bcc9b2' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\details.tpl',
      1 => 1645473350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6213ee4e6351e5_18019823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8594165726213ee4e627453_11178503', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4571574546213ee4e62a000_74491233', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_8594165726213ee4e627453_11178503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_8594165726213ee4e627453_11178503',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/legume.css');?>
"/>
<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_4571574546213ee4e62a000_74491233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4571574546213ee4e62a000_74491233',
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

	<div class="container">
	
        <div class="row">
            <div class="col-lg-6">
                <div class="BoxOrangeImage">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'objProduct');
$_smarty_tpl->tpl_vars['objProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objProduct']->value) {
$_smarty_tpl->tpl_vars['objProduct']->do_else = false;
?>
                    <img src="<?php echo base_url('assets/img');?>
/<?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_img;?>
" class="img-fluid OrangeProduit" alt="<?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_name;?>
">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="BoxTextProduit">
				
                    <h1 class="Tiltleproduct"><?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_name;?>
</h1>
                    <div>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="Price"><?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_pu;?>
 €</p>
                    <p class="Dexription"><?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_desc;?>
</p>
                    <h4 class="Poids">Conditionnement en emballage recyclé de </h4>
                    <ul class="PoidsMenu">
                        <li class="PoidsChoixFirst"></li>
                        <li class="PoidsChoixFirst"><?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_conditionning;?>
kg</li>
                        <li class="PoidsChoix">2 kilogrammes</li>
                        <li class="PoidsChoix">5 kilogrammes</li>
                    </ul>
                    <div class="ChoixProduitBox">
                        <div class="ChoixNumber">
                            <i class="fas fa-minus"></i>
                            <span class="NumberChoice">1</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="ButtonAddPanier">
                            <i class="fas fa-shopping-cart"></i>
                            <p class="AddPanier" href="panier.html">Ajouter au panier</p>
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
