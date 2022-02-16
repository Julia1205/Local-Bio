<?php
/* Smarty version 4.1.0, created on 2022-02-16 07:45:10
  from 'C:\wamp64\www\Local-Bio\app\Views\connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620cffe6aa6412_88551180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1948e206fc209c416fd3af5bb0d10b33082c18be' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\connect.tpl',
      1 => 1645019106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620cffe6aa6412_88551180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80703397620cffe6aa12c5_70577951', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1719794177620cffe6aa4189_22945377', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_80703397620cffe6aa12c5_70577951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_80703397620cffe6aa12c5_70577951',
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
class Block_1719794177620cffe6aa4189_22945377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1719794177620cffe6aa4189_22945377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_input']->value;?>

<?php
}
}
/* {/block "content"} */
}
