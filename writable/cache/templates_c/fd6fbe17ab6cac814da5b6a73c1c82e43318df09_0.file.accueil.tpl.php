<?php
/* Smarty version 4.1.0, created on 2022-02-14 13:13:01
  from 'C:\wamp64\www\testCISmarty\app\Views\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620aa9bd5ab2e3_70021871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6fbe17ab6cac814da5b6a73c1c82e43318df09' => 
    array (
      0 => 'C:\\wamp64\\www\\testCISmarty\\app\\Views\\accueil.tpl',
      1 => 1644865978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620aa9bd5ab2e3_70021871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_506047777620aa9bd5a9324_62478018', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_506047777620aa9bd5a9324_62478018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_506047777620aa9bd5a9324_62478018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>Ceci est le template d'accueil.</p>
<?php echo $_smarty_tpl->tpl_vars['result']->value;?>


<?php
}
}
/* {/block "content"} */
}
