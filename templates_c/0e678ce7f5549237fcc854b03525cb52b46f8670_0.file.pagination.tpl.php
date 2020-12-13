<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-13 01:14:26
  from 'C:\xampp\htdocs\pagination-demo\views\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd55ce2c5ef86_18588792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e678ce7f5549237fcc854b03525cb52b46f8670' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pagination-demo\\views\\pagination.tpl',
      1 => 1607818454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd55ce2c5ef86_18588792 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pagination_data']->value['error'] === 0 && $_smarty_tpl->tpl_vars['pagination_data']->value['total_rows'] > $_smarty_tpl->tpl_vars['pagination_data']->value['limit']) {?>
<div class="row">
  <div class="col">
      <?php if ($_smarty_tpl->tpl_vars['pagination_data']->value['error'] === 1) {?>
        <h4>Pagination failed.</h4>
      <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['url'];?>
/?offset=previous&current_offset=<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['current_offset'];?>
" 
          class="btn btn-info <?php if ($_smarty_tpl->tpl_vars['pagination_data']->value['current_offset'] == 0) {?>disabled<?php }?>" role="button">
          &#8249;
        </a>
        
                <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pagination_data']->value['pages']+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagination_data']->value['pages'])+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['url'];?>
/?offset=<?php echo ($_smarty_tpl->tpl_vars['page']->value*$_smarty_tpl->tpl_vars['pagination_data']->value['limit'])-$_smarty_tpl->tpl_vars['pagination_data']->value['limit'];?>
" 
            class="btn btn-default" role="button"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
        <?php }
}
?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['url'];?>
/?offset=next&current_offset=<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value['current_offset'];?>
" 
          class="btn btn-info <?php if ($_smarty_tpl->tpl_vars['pagination_data']->value['current_offset'] == ($_smarty_tpl->tpl_vars['pagination_data']->value['total_rows']-$_smarty_tpl->tpl_vars['pagination_data']->value['limit'])) {?>disabled<?php }?>" role="button">
          &#8250;
        </a>
      <?php }?>
  </div>
</div>
<?php }
}
}
