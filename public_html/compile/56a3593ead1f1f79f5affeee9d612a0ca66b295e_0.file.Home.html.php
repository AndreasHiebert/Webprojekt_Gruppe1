<?php
/* Smarty version 3.1.29, created on 2016-06-21 01:52:36
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576881c4c8a3f2_87357032',
  'file_dependency' => 
  array (
    '56a3593ead1f1f79f5affeee9d612a0ca66b295e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Home.html',
      1 => 1466465091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576881c4c8a3f2_87357032 ($_smarty_tpl) {
?>
<div class="container">
	<div class="row">
		<div id="homenews" class="col-xs-8">
			<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
				<h1>Hallo <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getName();?>
</h1>
			<?php }?>
			<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
				<h1>Hallo Besucher</h1>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
