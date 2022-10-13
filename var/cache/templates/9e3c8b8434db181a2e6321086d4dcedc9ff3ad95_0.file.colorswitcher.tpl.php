<?php
/* Smarty version 4.2.1, created on 2022-10-13 12:14:50
  from '/var/www/html/src/View/templates/colorswitcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6347e51a244942_76785893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e3c8b8434db181a2e6321086d4dcedc9ff3ad95' => 
    array (
      0 => '/var/www/html/src/View/templates/colorswitcher.tpl',
      1 => 1665656087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6347e51a244942_76785893 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<form name="colors" id="colors">
	<?php if ($_smarty_tpl->tpl_vars['colorMode']->value == "dark") {?>
		<a class="btn btn-primary color" onclick="update('colormode', 'light');" name="light">Vypnout tmavý mód</a>
	<?php } else { ?>
		<a class="btn btn-primary color" onclick="update('colormode', 'dark');" name="dark">Zapnout tmavý mód</a>
	<?php }?>
	</form>


<?php echo '<script'; ?>
>
function update(a, b) {
console.log(searchParams);
    var searchParams = new URLSearchParams(window.location.search);
    if (b != '')
        searchParams.set(a, b);
    else
        searchParams.delete(a);
    window.location.search = searchParams.toString();
}
<?php echo '</script'; ?>
><?php }
}
