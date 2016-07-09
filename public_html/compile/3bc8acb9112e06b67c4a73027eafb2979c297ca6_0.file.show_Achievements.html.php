<?php
/* Smarty version 3.1.29, created on 2016-07-09 20:45:37
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_Achievements.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57814651706997_22889267',
  'file_dependency' => 
  array (
    '3bc8acb9112e06b67c4a73027eafb2979c297ca6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_Achievements.html',
      1 => 1468089819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57814651706997_22889267 ($_smarty_tpl) {
?>

<ul class="list-group">
<?php
$_from = $_smarty_tpl->tpl_vars['userAchievements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_achievement_0_saved_item = isset($_smarty_tpl->tpl_vars['achievement']) ? $_smarty_tpl->tpl_vars['achievement'] : false;
$_smarty_tpl->tpl_vars['achievement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['achievement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['achievement']->value) {
$_smarty_tpl->tpl_vars['achievement']->_loop = true;
$__foreach_achievement_0_saved_local_item = $_smarty_tpl->tpl_vars['achievement'];
?>
<li class="list-group-item">
  <div class="media">
     <div class="media-left media-middle">
         <a href="#">
             <img class="media-object" src="img/albert-einstein.jpg" alt="Ein schlauer Mensch" width="100" height="97">
         </a>
     </div>
     <div id= "achievementItem" class="media-body">
         <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['achievement']->value->getName();?>
</h4>
         <?php echo $_smarty_tpl->tpl_vars['achievement']->value->getValue();?>
 Fitnesspoints<br>
         <?php echo $_smarty_tpl->tpl_vars['achievement']->value->getDescription();?>


     </div>
      <div class="media-right">
          <?php echo $_smarty_tpl->tpl_vars['achievement']->value->getObtainedDate();?>

      </div>
   </div>
</li>
<?php
$_smarty_tpl->tpl_vars['achievement'] = $__foreach_achievement_0_saved_local_item;
}
if ($__foreach_achievement_0_saved_item) {
$_smarty_tpl->tpl_vars['achievement'] = $__foreach_achievement_0_saved_item;
}
?>
</ul>
<?php }
}
