<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 13:32:16
  from 'C:\xampp\htdocs\pagination-demo\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4b8504bad79_03630843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcfc9da92875bb090a63fa4247be252be4da33ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pagination-demo\\views\\about.tpl',
      1 => 1607766840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4b8504bad79_03630843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20959019155fd4b8504b9129_22434183', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14826677635fd4b8504ba198_56627435', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block 'title'} */
class Block_20959019155fd4b8504b9129_22434183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20959019155fd4b8504b9129_22434183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
About<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14826677635fd4b8504ba198_56627435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14826677635fd4b8504ba198_56627435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h3>About</h3>
<?php
}
}
/* {/block 'body'} */
}
