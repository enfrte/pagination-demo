<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 13:22:42
  from 'C:\xampp\htdocs\pagination-demo\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4b61275d515_50282592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76bdd34c944ec394cad8458633c6f7f5df5dbab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pagination-demo\\views\\home.tpl',
      1 => 1607766840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4b61275d515_50282592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8622865525fd4b612740aa0_80354366', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_536266925fd4b612744671_95117308', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block 'title'} */
class Block_8622865525fd4b612740aa0_80354366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8622865525fd4b612740aa0_80354366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_536266925fd4b612744671_95117308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_536266925fd4b612744671_95117308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pagination-demo\\smarty-3.1.34\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\pagination-demo\\smarty-3.1.34\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

  <h3>User Information:</h3>

  <p>Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
</p>
  <p>Address: <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['address']->value,8);?>
</p>
  <p>Address: <?php echo print_r($_smarty_tpl->tpl_vars['address']->value,1);?>
</p>

<?php
}
}
/* {/block 'body'} */
}
