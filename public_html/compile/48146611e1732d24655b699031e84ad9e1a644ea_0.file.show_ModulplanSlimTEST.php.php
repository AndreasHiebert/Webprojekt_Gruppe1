<?php
/* Smarty version 3.1.29, created on 2016-06-17 21:15:21
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_ModulplanSlimTEST.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57644c49123f88_38132861',
  'file_dependency' => 
  array (
    '48146611e1732d24655b699031e84ad9e1a644ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_ModulplanSlimTEST.php',
      1 => 1466190919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57644c49123f88_38132861 ($_smarty_tpl) {
?>
<ul>
    <?php
$_from = $_smarty_tpl->tpl_vars['userss']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</li>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</ul>


<div class="row">
  <div class="col-xs-3">
    <div>AV 5</div>
  </div>
  <div class="col-xs-3">
    <div>AV 6</div>
  </div>
  <div class="col-xs-3">
    <div>AV 7</div>
  </div>
  <div class="col-xs-3">
    <div>AV 8</div>
  </div>
</div>

<div class="row">
  <div class="col-xs-3">
    <div>AV 5</div>
  </div>

</div>

<?php echo '<?php
';?>document.UserController.action = "logout";
<?php echo '?>';
}
}
