<?php
/* Smarty version 4.2.1, created on 2022-10-13 20:07:44
  from '/var/www/html/src/View/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634853f01ef4c3_76169039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0336cac71ec739885c458e5eda1815f7f326b005' => 
    array (
      0 => '/var/www/html/src/View/templates/index.tpl',
      1 => 1665684462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:filters.tpl' => 1,
    'file:colorswitcher.tpl' => 1,
    'file:error.tpl' => 1,
    'file:apartments.tpl' => 1,
    'file:paginator.tpl' => 1,
  ),
),false)) {
function content_634853f01ef4c3_76169039 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="cs">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Byty</title>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/distanceChecker.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/RouteCreator.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/GetMetroStations.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
		        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
		        crossorigin="anonymous"><?php echo '</script'; ?>
>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
		      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

		<link href="/css/styles.css" rel="stylesheet">
		<?php echo '<script'; ?>
 src="/js/jquery-3.6.1.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://api.mapy.cz/loader.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">Loader.load();<?php echo '</script'; ?>
>
	</head>

		<body <?php if ($_smarty_tpl->tpl_vars['colorMode']->value == "dark") {?>class="dark"<?php }?>>
        <?php $_smarty_tpl->_subTemplateRender("file:filters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:colorswitcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if (count($_smarty_tpl->tpl_vars['apartments']->value) == 0) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:apartments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
	</body>
	<?php echo '<script'; ?>
>
	    var i = 0;
	    $(document).ready(function () {
	       	 urls = Object.values(document.getElementsByClassName("addres"));
	        	urls.forEach(loop);
	    });
	    function loop(item, index) {
	        var items = item.innerHTML;
	        window.countDistance(items, i);
	       		 getMapCoordsFromAddress(items, function (result) {
	            var NearestLoc = getNearestStation(result.coords.x, result.coords.y);
	            var coords = [result.coords, NearestLoc["coords"]]; 
	            	CreateRoute(coords, function (result2) {
	                	fillRouteInfo(index, NearestLoc["station"], result2, NearestLoc["track"]);
	            });
	        });
	        i++;
	    }
	<?php echo '</script'; ?>
>
	</body>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3 copyright-bar" style="background-color: rgba(0, 0, 0, 0.2);">
    <p class="copyright-text">Copyright © 2022 by 
    <a class="text-dark copyright-text" href="http://monitorbytu.eu">Monitor Bytů</a></p>
  </div>
  <!-- Copyright -->
</footer>
</html><?php }
}
