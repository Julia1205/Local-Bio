<?php
/* Smarty version 4.1.0, created on 2022-02-25 11:11:21
  from 'C:\wamp64\www\Local-Bio\app\Views\connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62190db9177b36_50129110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1948e206fc209c416fd3af5bb0d10b33082c18be' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\connect.tpl',
      1 => 1645809078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62190db9177b36_50129110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102278100862190db916c7d8_75056694', "css");
?>



	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209410990662190db916f1e8_57519651', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_102278100862190db916c7d8_75056694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_102278100862190db916c7d8_75056694',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<link rel="stylesheet" href="<?php echo base_url('assets/css/Connexion.css');?>
"/>
	<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_209410990662190db916f1e8_57519651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_209410990662190db916f1e8_57519651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if (count($_smarty_tpl->tpl_vars['arrErrors']->value) > 0) {?>
			<div class="error">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrErrors']->value, 'strError');
$_smarty_tpl->tpl_vars['strError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['strError']->value) {
$_smarty_tpl->tpl_vars['strError']->do_else = false;
?>
					   <p><?php echo $_smarty_tpl->tpl_vars['strError']->value;?>
</p>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>				
			<?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>
	
				<div class="row mb-3">			
					<?php echo $_smarty_tpl->tpl_vars['label_email']->value;?>
		
					<div class="col-sm-10">				
						<?php echo $_smarty_tpl->tpl_vars['form_email']->value;?>

					</div>
				</div>
				<div class="row mb-3">
					<div class="col-sm-2">
						<?php echo $_smarty_tpl->tpl_vars['label_password']->value;?>

					</div>
					<div class="col-sm-10">
						<?php echo $_smarty_tpl->tpl_vars['form_password']->value;?>

					</div>
				</div>
					<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

			<div class="RegisterBox">
				<span></span><a href="<?php echo base_url('index.php/users/create');?>
" class="LienSubscribe">S'inscrire</a>
			</div>
	<?php
}
}
/* {/block "content"} */
}
