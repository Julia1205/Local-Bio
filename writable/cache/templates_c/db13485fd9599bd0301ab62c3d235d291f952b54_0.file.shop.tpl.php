<?php
/* Smarty version 4.1.0, created on 2022-02-16 03:50:32
  from 'C:\wamp64\www\Local-Bio\app\Views\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620cc8e8f126d4_10620258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db13485fd9599bd0301ab62c3d235d291f952b54' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\shop.tpl',
      1 => 1645002293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620cc8e8f126d4_10620258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_875395181620cc8e8e7e151_74676538', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2110789205620cc8e8e82ff6_99566404', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_875395181620cc8e8e7e151_74676538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_875395181620cc8e8e7e151_74676538',
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
class Block_2110789205620cc8e8e82ff6_99566404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2110789205620cc8e8e82ff6_99566404',
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
