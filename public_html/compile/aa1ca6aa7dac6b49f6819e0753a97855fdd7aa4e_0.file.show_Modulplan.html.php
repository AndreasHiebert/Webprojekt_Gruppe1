<?php
/* Smarty version 3.1.29, created on 2016-07-11 09:59:53
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_Modulplan.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578351f96aed10_52500949',
  'file_dependency' => 
  array (
    'aa1ca6aa7dac6b49f6819e0753a97855fdd7aa4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_Modulplan.html',
      1 => 1468223975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578351f96aed10_52500949 ($_smarty_tpl) {
?>
<div id="modulebox">
    <div id="modulplan_row" class="btn-group btn-group-justified " role="group" aria-label="...">
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
    <div id = "semesterRow" class="btn-group btn-group-justified modulplan_group" role="group" aria-label="...">
        <?php }?>

        <div class="btn-group" role="group">

            <?php if ($_smarty_tpl->tpl_vars['module']->value->completedModule($_smarty_tpl->tpl_vars['module']->value->getId()) == true) {?>
            <button id = "moduleButton"  name="<?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
" type="button" data-toggle="modal" data-target="#gradeModal<?php echo $_smarty_tpl->tpl_vars['module']->value->getId();?>
" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
<br>CP: <?php echo $_smarty_tpl->tpl_vars['module']->value->getCp();?>
<br><b>Note: <?php echo $_smarty_tpl->tpl_vars['module']->value->completedModuleGrade($_smarty_tpl->tpl_vars['module']->value->getId());?>
</b></button>
            <?php } else { ?>
            <button id = "moduleButton"  name="<?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
" type="button" data-toggle="modal" data-target="#gradeModal<?php echo $_smarty_tpl->tpl_vars['module']->value->getId();?>
" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
<br>CP: <?php echo $_smarty_tpl->tpl_vars['module']->value->getCp();?>
</button>
            <?php }?>


            <div id="gradeModal<?php echo $_smarty_tpl->tpl_vars['module']->value->getId();?>
" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">Close</button>
                            <h4 class="modal-title">Enter Grade for: <?php echo $_smarty_tpl->tpl_vars['module']->value->getName();?>
</h4>
                        </div>

                        <div class="modal-body">
                            <form action="index.php?controller=GradeController&action=enterGrade" method="post">
                                <div class="form-group">
                                    <label for="grade">Grade:</label>
                                    <input id="gradeInput" name="grade_input" class="form-control" type="text" title="grade" placeholder="Enter your grade">
                                </div>

                                <div class="form-group">
                                    <input id="userId" name="user_id" class="form-control" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getId();?>
">
                                </div>

                                <div class="form-group">
                                    <input id="moduleId" name="module_id" class="form-control" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['module']->value->getId();?>
">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
</div>
<?php }
}
