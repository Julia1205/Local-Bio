<?php
/* Smarty version 4.1.0, created on 2022-02-28 12:44:57
  from 'C:\wamp64\www\Local-Bio\app\Views\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621d1829aa42c8_78247813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdb99d119d426bb3e176930cd48a6d881c132342' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\create.tpl',
      1 => 1645809530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621d1829aa42c8_78247813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2013945066621d1829a92ee9_47048273', "css");
?>



	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399230555621d1829a96066_07698247', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_2013945066621d1829a92ee9_47048273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_2013945066621d1829a92ee9_47048273',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<link rel="stylesheet" href="<?php echo base_url('assets/css/Inscription.css');?>
"/>
	<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_1399230555621d1829a96066_07698247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1399230555621d1829a96066_07698247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="container">

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
			<div class="row">
				<div class="col-lg-offset-4 col-lg-4">
					<?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_name']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_firstname']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_firstname']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_email']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_email']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_password']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_password']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_passwordConfirmed']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_passwordConfirmed']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_houseNumber']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_houseNumber']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_address']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_address']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_city']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_city']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_cp']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_cp']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['label_phone']->value;?>

							<?php echo $_smarty_tpl->tpl_vars['form_phone']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>

					<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

				</div>
			</div>
		</div>

	<?php
}
}
/* {/block "content"} */
}
