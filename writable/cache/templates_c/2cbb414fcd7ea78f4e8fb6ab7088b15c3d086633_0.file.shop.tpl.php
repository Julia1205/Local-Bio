<?php
/* Smarty version 4.1.0, created on 2022-02-16 03:04:55
  from 'C:\wamp64\www\test_local-bio\app\Views\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620cbe37bf98a3_25787051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cbb414fcd7ea78f4e8fb6ab7088b15c3d086633' => 
    array (
      0 => 'C:\\wamp64\\www\\test_local-bio\\app\\Views\\shop.tpl',
      1 => 1645002293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620cbe37bf98a3_25787051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1636463202620cbe37bee000_64416388', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_934241044620cbe37bf2224_22114653', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_1636463202620cbe37bee000_64416388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1636463202620cbe37bee000_64416388',
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
class Block_934241044620cbe37bf2224_22114653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_934241044620cbe37bf2224_22114653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'objProduct');
$_smarty_tpl->tpl_vars['objProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objProduct']->value) {
$_smarty_tpl->tpl_vars['objProduct']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['objProduct']->value->product_name;?>
 
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
<?php
}
}
/* {/block "content"} */
}
