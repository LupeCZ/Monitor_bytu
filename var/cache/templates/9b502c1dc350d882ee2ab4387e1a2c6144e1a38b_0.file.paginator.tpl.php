<?php
/* Smarty version 4.2.1, created on 2022-10-10 21:01:05
  from '/var/www/html/src/View/templates/paginator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63448811f3cb71_23735825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b502c1dc350d882ee2ab4387e1a2c6144e1a38b' => 
    array (
      0 => '/var/www/html/src/View/templates/paginator.tpl',
      1 => 1665435663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63448811f3cb71_23735825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('nextpage', $_smarty_tpl->tpl_vars['page']->value+1);
$_smarty_tpl->_assignInScope('previouspage', $_smarty_tpl->tpl_vars['page']->value-1);?>
<nav aria-label="Page navigation example">
    <div class="d-grid gap-2">
        <?php if (count($_smarty_tpl->tpl_vars['apartments']->value) > 9) {?>
            <a class="btn btn-primary btn-lg" href=?<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
>Další</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
        <a class="btn btn-primary btn-lg" href=?<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['previouspage']->value;?>
>Předchozí</a>
        <?php }?>
    </div>
</nav>
<?php }
}
