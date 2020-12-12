<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 15:39:16
  from 'C:\xampp\htdocs\pagination-demo\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4d614e804e2_50980675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b972112db16d7c431d079140faba659c6012d4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pagination-demo\\views\\index.tpl',
      1 => 1607783947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:pagination.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fd4d614e804e2_50980675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <h1>Pagination Demo</h1>
  <div class="row">
  <div class="col">
    <ol>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['demo']->value['titles'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
  </div>
</div>
  <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
