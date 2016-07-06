<?php
/* Smarty version 3.1.29, created on 2016-07-06 16:53:28
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_Modulplan.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d1b68531385_22907858',
  'file_dependency' => 
  array (
    'aa1ca6aa7dac6b49f6819e0753a97855fdd7aa4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_Modulplan.html',
      1 => 1467816802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d1b68531385_22907858 ($_smarty_tpl) {
?>
<head>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<div class="btn-group btn-group-justified" role="group" aria-label="...">
    <?php
$_from = $_smarty_tpl->tpl_vars['allModules']->value;
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

    <?php if ($_smarty_tpl->tpl_vars['module']->value->getSemester() != $_smarty_tpl->tpl_vars['semester']->value) {?>
</div>
<br>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
    <?php }?>

    <div class="btn-group" role="group">
        <button type="button" class="btn btn-default btn-lg"  data-toggle="modal" data-target="#gradeModal" style="margin-bottom:4px;white-space: normal;"><?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
</button>
    </div>
    <?php $_smarty_tpl->tpl_vars['semester'] = new Smarty_Variable($_smarty_tpl->tpl_vars['module']->value->getSemester(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'semester', 0);?>
    <?php
$_smarty_tpl->tpl_vars['module'] = $__foreach_module_0_saved_local_item;
}
if ($__foreach_module_0_saved_item) {
$_smarty_tpl->tpl_vars['module'] = $__foreach_module_0_saved_item;
}
?>
</div>


<div id="gradeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">Close</button>
                <h4 class="modal-title">Enter Grade</h4>
            </div>
            <div class="modal-body">
                <p>Hier soll der Dialog zum Eintragen der Noten angezeigt werden</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Accept</button>
            </div>
        </div>

    </div>
</div>


<?php echo '<script'; ?>
>
    $(document).ready(function () {

        var highestBox = 0;
        $('.btn-group-justified .btn').each(function () {
            if ($(this).height() > highestBox) {
                highestBox = $(this).height();
            }
        });
        $('.btn-group-justified .btn').height(highestBox);

    });
<?php echo '</script'; ?>
>
<?php }
}
