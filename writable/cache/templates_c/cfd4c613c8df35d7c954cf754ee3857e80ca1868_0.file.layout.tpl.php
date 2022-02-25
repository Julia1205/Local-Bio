<?php
/* Smarty version 4.1.0, created on 2022-02-25 09:34:40
  from 'C:\wamp64\www\Local-Bio\app\Views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6218f710dba9f4_50675101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd4c613c8df35d7c954cf754ee3857e80ca1868' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\layout.tpl',
      1 => 1645721790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6218f710dba9f4_50675101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13849034916218f710db8c00_84252365', "content");
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
/* {block "content"} */
class Block_13849034916218f710db8c00_84252365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13849034916218f710db8c00_84252365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "content"} */
}
