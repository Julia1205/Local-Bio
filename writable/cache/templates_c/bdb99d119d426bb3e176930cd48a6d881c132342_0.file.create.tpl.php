<?php
/* Smarty version 4.1.0, created on 2022-02-17 09:12:10
  from 'C:\wamp64\www\Local-Bio\app\Views\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620e65caa33d75_73765888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdb99d119d426bb3e176930cd48a6d881c132342' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\create.tpl',
      1 => 1645110725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620e65caa33d75_73765888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144251202620e65caa21665_98650612', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1405543836620e65caa24cf8_60368119', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_144251202620e65caa21665_98650612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_144251202620e65caa21665_98650612',
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
class Block_1405543836620e65caa24cf8_60368119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1405543836620e65caa24cf8_60368119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
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
<?php }
echo $_smarty_tpl->tpl_vars['form_open']->value;?>

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

<?php echo $_smarty_tpl->tpl_vars['label_number']->value;?>

<?php echo $_smarty_tpl->tpl_vars['form_number']->value;?>

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


<?php
}
}
/* {/block "content"} */
}
