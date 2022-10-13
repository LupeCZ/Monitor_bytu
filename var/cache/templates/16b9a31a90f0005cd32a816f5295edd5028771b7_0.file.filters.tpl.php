<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:35:35
  from '/var/www/html/src/View/templates/filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63484c67e342b4_43307099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b9a31a90f0005cd32a816f5295edd5028771b7' => 
    array (
      0 => '/var/www/html/src/View/templates/filters.tpl',
      1 => 1665682532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63484c67e342b4_43307099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('minprice', $_smarty_tpl->tpl_vars['filters']->value['pricemin']);
$_smarty_tpl->_assignInScope('maxprice', $_smarty_tpl->tpl_vars['filters']->value['pricemax']);
$_smarty_tpl->_assignInScope('areamax', $_smarty_tpl->tpl_vars['filters']->value['areamax']);
$_smarty_tpl->_assignInScope('areamin', $_smarty_tpl->tpl_vars['filters']->value['areamin']);
if ($_smarty_tpl->tpl_vars['filters']->value['pricemax'] == null) {?>
    <?php $_smarty_tpl->_assignInScope('maxprice', 55000);
}
if ($_smarty_tpl->tpl_vars['filters']->value['pricemin'] == null) {?>
    <?php $_smarty_tpl->_assignInScope('minprice', 5000);
}?>

<?php if ($_smarty_tpl->tpl_vars['filters']->value['areamin'] == null) {?>
    <?php $_smarty_tpl->_assignInScope('areamin', 10);
}
if ($_smarty_tpl->tpl_vars['filters']->value['areamax'] == null) {?>
    <?php $_smarty_tpl->_assignInScope('areamax', 160);
}?>


<!doctype html>
<H2 class="text-center main-header">Celkem v databázi: <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</H2>
<div class="d-flex fixed-filters align-items-stretch flex-shrink-0 bg-white" style="width: 40%;">

    <div class="list-group list-group-flush scrollarea">
        <button class="list-group-item list-group-item-action active py-3 lh-sm" data-bs-toggle="collapse" data-bs-target="#collapseFilters" aria-current="true">
        <strong class="mb-1 text-center" align="center">Filtry</strong>
        </button>
            <div class="collapse" id="collapseFilters">
                <label for="order">Řadit podle</label>
                        <form type="GET">
                <select name="order" id="order">
                    <option value="cheap" <?php if ($_smarty_tpl->tpl_vars['order']->value == "cheap") {?>selected="selected"<?php }?>>Nejlevnější</option>
                    <option value="expensive"<?php if ($_smarty_tpl->tpl_vars['order']->value == "expensive") {?>selected="selected"<?php }?>>Nejdražší</option>
                    <option value="part" <?php if ($_smarty_tpl->tpl_vars['order']->value == "part") {?>selected<?php }?>>Mětské části</option>
                    <option value="areamin" <?php if ($_smarty_tpl->tpl_vars['order']->value == "areamin") {?>selected <?php }?>>Od nejmenšího</option>
                    <option value="areamax" <?php if ($_smarty_tpl->tpl_vars['order']->value == "areamax") {?>selected <?php }?>>Od největšího</option>
                </select>
                <div class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-450 align-items-center justify-content-between">
                        <strong class="mb-1">Část Prahy</strong>
                    </div>
                    <div class="d-flex  p-2 flex-wrap mb-3">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parts']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['f']->value['part'] != NULL) {?>
                            <div class="half">
                                <input type="checkbox" id="part_<?php echo $_smarty_tpl->tpl_vars['f']->value['part'];?>
" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['f']->value['part']);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['part'])) && in_array(rawurlencode($_smarty_tpl->tpl_vars['f']->value['part']),$_smarty_tpl->tpl_vars['filters']->value['part'])) {?>checked<?php }?> name="part[]">
                                <label for="part_<?php echo $_smarty_tpl->tpl_vars['f']->value['part'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['part'];?>
 (<?php echo $_smarty_tpl->tpl_vars['f']->value['count'];?>
)</label>
                            </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Plocha</strong>
                    </div>
                    <div class="col-10 mb-1"> Od <input type="number" min="10" id="areamin" value="<?php echo $_smarty_tpl->tpl_vars['areamin']->value;?>
" step="1" name="areamin" size=""> do <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['areamax']->value;?>
" min="0" size="5" id="areamax" step="1" name="areamax"> m2</div>
                </div>

                <div class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Cena</strong>
                    </div>
                    <div class="col-10 mb-1"> Od <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['minprice']->value;?>
" min="4000" id="pricemin" step="500" name="pricemin" size="5">
                        do <input type="number" min="4000" size="5" id="pricemax" value="<?php echo $_smarty_tpl->tpl_vars['maxprice']->value;?>
" step="500" name="pricemax"> Kč</div>

                </div>
                <div href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Stav</strong>
                    </div>
                    <div class="col-10 mb-1">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conditions']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['f']->value['stav'] == NULL) {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['stav'] = "Neuvedeno";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php }?>
                            <div class="full">
                            <input type="checkbox" id="stav_<?php echo $_smarty_tpl->tpl_vars['f']->value['stav'];?>
" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['f']->value['stav']);?>
" <?php if (((rawurlencode($_smarty_tpl->tpl_vars['filters']->value['stav']) !== null )) && in_array($_smarty_tpl->tpl_vars['f']->value['stav'],$_smarty_tpl->tpl_vars['filters']->value['stav'])) {?>checked<?php }?> name="stav[]"">
                                <label for="stav_<?php echo rawurlencode($_smarty_tpl->tpl_vars['f']->value['stav']);?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['stav'];?>
 (<?php echo $_smarty_tpl->tpl_vars['f']->value['count'];?>
)</label>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Dispozice</strong>
                    </div>
                    <div class="col-10 mb-1">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['f']->value['dispozice'] == NULL || $_smarty_tpl->tpl_vars['f']->value['dispozice'] == "0") {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['dispozice'] = "Neuvedeno";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php }?>
                            <div class="full">
                                <input type="checkbox" id="dispozice_<?php echo rawurlencode($_smarty_tpl->tpl_vars['f']->value['dispozice']);?>
" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['f']->value['dispozice']);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['size'])) && in_array(rawurlencode($_smarty_tpl->tpl_vars['f']->value['dispozice']),$_smarty_tpl->tpl_vars['filters']->value['size'])) {?>checked<?php }?> name="size[]"">
                                <label for="dispozice_<?php echo $_smarty_tpl->tpl_vars['f']->value['dispozice'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['dispozice'];?>
 (<?php echo $_smarty_tpl->tpl_vars['f']->value['count'];?>
)</label>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>

                <div href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Patro</strong>
                    </div>

                    <div class="col-10 mb-1">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stairs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                             <?php if ($_smarty_tpl->tpl_vars['f']->value['patro'] == "0") {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['patro'] = "0";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['f']->value['patro'] == null) {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['patro'] = "Neuvedeno";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php }?>
                            <div class="full">
                                <input type="checkbox" id="patro_<?php echo $_smarty_tpl->tpl_vars['f']->value['patro'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['patro'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['stairs'])) && in_array($_smarty_tpl->tpl_vars['f']->value['patro'],$_smarty_tpl->tpl_vars['filters']->value['stairs'])) {?>checked<?php }?> name="stairs[]">
                                <label for="patro_<?php echo $_smarty_tpl->tpl_vars['f']->value['patro'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['patro'];?>
 (<?php echo $_smarty_tpl->tpl_vars['f']->value['count'];?>
)</label>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Výtah</strong>
                    </div>
                    <div class="col-10 mb-1">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elevator']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['f']->value['vytah'] == 1) {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['vytah'] = "Ano";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['f']->value['vytah'] == "0") {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['vytah'] = "Ne";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php } else { ?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['vytah'] = "Neuvedeno";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php }?>
                            <div class="half">
                                <input type="checkbox" id="vytah_<?php echo $_smarty_tpl->tpl_vars['f']->value['vytah'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['vytah'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['elevator'])) && in_array($_smarty_tpl->tpl_vars['f']->value['vytah'],$_smarty_tpl->tpl_vars['filters']->value['elevator'])) {?>checked<?php }?> name="elevator[]">
                                <label for="vytah_<?php echo $_smarty_tpl->tpl_vars['f']->value['vytah'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['vytah'];?>
 (<?php echo $_smarty_tpl->tpl_vars['f']->value['count'];?>
)</label>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Balkon</strong>
                    </div>
                    <div class="col-10 mb-1">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['balcony']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['f']->value['balkon'] == 1) {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['balkon'] = "Ano";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['f']->value['balkon'] == "0") {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['balkon'] = "Ne";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php } else { ?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['f']) ? $_smarty_tpl->tpl_vars['f']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['balkon'] = "Neuvedeno";
$_smarty_tpl->_assignInScope('f', $_tmp_array);?>
                            <?php }?>
                            <div class="half">
                                <input type="checkbox" id="balkon_<?php echo $_smarty_tpl->tpl_vars['f']->value['balkon'];?>
" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['f']->value['balkon']);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['balcony'])) && in_array($_smarty_tpl->tpl_vars['f']->value['balkon'],$_smarty_tpl->tpl_vars['filters']->value['balcony'])) {?>checked<?php }?> name="balcony[]">
                                <label for="balkon_<?php echo $_smarty_tpl->tpl_vars['f']->value['balkon'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['balkon'];?>
 (<?php echo $_smarty_tpl->tpl_vars['f']->value['count'];?>
)</label>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <input class="btn btn-secondary" type="submit" value="Potvrdit">
            </div>
        </form>
    </div>
</div>

<?php }
}
