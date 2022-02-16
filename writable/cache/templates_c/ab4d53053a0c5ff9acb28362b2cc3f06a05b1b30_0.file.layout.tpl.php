<?php
/* Smarty version 4.1.0, created on 2022-02-16 02:27:36
  from 'C:\wamp64\www\test_local-bio\app\Views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620cb578eae593_75393078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab4d53053a0c5ff9acb28362b2cc3f06a05b1b30' => 
    array (
      0 => 'C:\\wamp64\\www\\test_local-bio\\app\\Views\\layout.tpl',
      1 => 1644999823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_620cb578eae593_75393078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1210445282620cb578eac604_34383537', "content");
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
/* {block "content"} */
class Block_1210445282620cb578eac604_34383537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1210445282620cb578eac604_34383537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "content"} */
}
