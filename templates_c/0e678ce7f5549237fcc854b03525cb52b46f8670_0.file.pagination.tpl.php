<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 16:33:06
  from 'C:\xampp\htdocs\pagination-demo\views\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4e2b21251d5_17495769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e678ce7f5549237fcc854b03525cb52b46f8670' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pagination-demo\\views\\pagination.tpl',
      1 => 1607787183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4e2b21251d5_17495769 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col">
      <?php if ($_smarty_tpl->tpl_vars['pagination_data']->value['error'] === 1) {?>
        <h4>Pagination failed.</h4>
      <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['url'];?>
/?offset=previous&current_offset=<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['current_offset']+$_smarty_tpl->tpl_vars['pagination_data']->value['limit'];?>
" 
          class="btn btn-info active" role="button" aria-pressed="true">
          &#8249;
        </a>
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pagination_data']->value['page_chunk']+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagination_data']->value['page_chunk'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['url'];?>
/?offset=<?php echo ($_smarty_tpl->tpl_vars['foo']->value*$_smarty_tpl->tpl_vars['pagination_data']->value['limit'])-$_smarty_tpl->tpl_vars['pagination_data']->value['limit'];?>
" 
            class="btn btn-default active" role="button" aria-pressed="true"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
        <?php }
}
?>
        <?php if ('condition') {?>
          
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['url'];?>
/?offset=next&current_offset=<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['current_offset']+$_smarty_tpl->tpl_vars['pagination_data']->value['limit'];?>
" 
          class="btn btn-info active" role="button" aria-pressed="true">
          &#8250;
        </a>
      <?php }?>
  </div>
</div>
<?php }
}
