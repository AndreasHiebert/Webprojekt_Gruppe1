<?php
/* Smarty version 3.1.29, created on 2016-07-07 00:13:01
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_Modulplan.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d826d096d02_46869962',
  'file_dependency' => 
  array (
    'aa1ca6aa7dac6b49f6819e0753a97855fdd7aa4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_Modulplan.html',
      1 => 1467843179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d826d096d02_46869962 ($_smarty_tpl) {
?>
<h1>Modulplan <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getCurrentCourseAbbreviation();?>
</h1>

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
<div id = "semesterRow" class="btn-group btn-group-justified" role="group" aria-label="...">
    <?php }?>

    <div class="btn-group" role="group">
        <button id = "moduleButton"  name="<?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
" type="button" data-toggle="modal" data-target="#gradeModal" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
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

<br>

<div id="gradeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">Close</button>
                <h4 class="modal-title">Enter Grade for: <?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
</h4>
            </div>
            <div class="modal-body">
                <form>
                     Grade<br>
                    <input id="gradeInput" type="text" title="grade" placeholder="Enter your grade"><br>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Accept</button>
            </div>
        </div>

    </div>
</div>


<?php echo '<script'; ?>
>
 $('#gradeModal').on('show.bs.modal', function(e) {
    var name = e.relatedTarget.name;
 });
<?php echo '</script'; ?>
>
<?php }
}
