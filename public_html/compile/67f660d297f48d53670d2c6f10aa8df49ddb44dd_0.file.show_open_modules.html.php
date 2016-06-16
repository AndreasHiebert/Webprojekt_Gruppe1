<?php
/* Smarty version 3.1.29, created on 2016-06-14 05:34:03
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_open_modules.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575f7b2bbeed43_75583143',
  'file_dependency' => 
  array (
    '67f660d297f48d53670d2c6f10aa8df49ddb44dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_open_modules.html',
      1 => 1465875241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575f7b2bbeed43_75583143 ($_smarty_tpl) {
?>
<ul>
    <?php
$_from = $_smarty_tpl->tpl_vars['modules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_module_0_saved_item = isset($_smarty_tpl->tpl_vars['module']) ? $_smarty_tpl->tpl_vars['module'] : false;
$_smarty_tpl->tpl_vars['module'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['module']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
$__foreach_module_0_saved_local_item = $_smarty_tpl->tpl_vars['module'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</li>
    <?php
$_smarty_tpl->tpl_vars['module'] = $__foreach_module_0_saved_local_item;
}
if ($__foreach_module_0_saved_item) {
$_smarty_tpl->tpl_vars['module'] = $__foreach_module_0_saved_item;
}
?>
</ul>
<?php }
}
