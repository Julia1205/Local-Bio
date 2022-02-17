<?php
/* Smarty version 4.1.0, created on 2022-02-17 07:58:51
  from 'C:\wamp64\www\Local-Bio\app\Views\connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620e549bd45e51_99101693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1948e206fc209c416fd3af5bb0d10b33082c18be' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\connect.tpl',
      1 => 1645106267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620e549bd45e51_99101693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_415949038620e549bd3d835_77446233', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1314376804620e549bd410f1_76031496', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_415949038620e549bd3d835_77446233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_415949038620e549bd3d835_77446233',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/accueil.css');?>
"/>
<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_1314376804620e549bd410f1_76031496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1314376804620e549bd410f1_76031496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>

    <div class="row mb-3">
		<?php echo $_smarty_tpl->tpl_vars['label_email']->value;?>

			<div class="col-sm-10">
				<?php echo $_smarty_tpl->tpl_vars['form_email']->value;?>

			</div>
		</div>
		
<?php echo $_smarty_tpl->tpl_vars['label_password']->value;?>

<?php echo $_smarty_tpl->tpl_vars['form_password']->value;?>

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
