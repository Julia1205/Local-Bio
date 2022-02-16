<?php
/* Smarty version 4.1.0, created on 2022-02-16 03:50:33
  from 'C:\wamp64\www\Local-Bio\app\Views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620cc8e90cb783_58494973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd4c613c8df35d7c954cf754ee3857e80ca1868' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\layout.tpl',
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
function content_620cc8e90cb783_58494973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_705300726620cc8e90c9b03_85079464', "content");
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
/* {block "content"} */
class Block_705300726620cc8e90c9b03_85079464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_705300726620cc8e90c9b03_85079464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "content"} */
}
