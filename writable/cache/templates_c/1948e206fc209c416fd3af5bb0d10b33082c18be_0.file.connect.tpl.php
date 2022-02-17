<?php
/* Smarty version 4.1.0, created on 2022-02-17 12:29:39
  from 'C:\wamp64\www\Local-Bio\app\Views\connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620e941393fbb5_92948423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1948e206fc209c416fd3af5bb0d10b33082c18be' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\connect.tpl',
      1 => 1645122577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620e941393fbb5_92948423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_582120196620e9413938829_24877082', "css");
?>



	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_604296196620e941393b3e9_33418546', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_582120196620e9413938829_24877082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_582120196620e9413938829_24877082',
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
class Block_604296196620e941393b3e9_33418546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_604296196620e941393b3e9_33418546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="container">
			<?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>

				<div class="mx-auto">
					<div class="row mb-3">
						<div class="col-sm-2">
							<?php echo $_smarty_tpl->tpl_vars['label_email']->value;?>

						</div>
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

				</div>
			<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

			<div class="RegisterBox">
				<span></span><a href="<?php echo base_url('index.php/users/create');?>
" class="LienSubscribe">S'inscrire</a>
			</div>
		</div>


	<?php
}
}
/* {/block "content"} */
}
