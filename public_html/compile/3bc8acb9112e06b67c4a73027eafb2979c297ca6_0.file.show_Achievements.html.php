<?php
/* Smarty version 3.1.29, created on 2016-07-11 19:47:44
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_Achievements.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5783dbc0e0c5e5_71079080',
  'file_dependency' => 
  array (
    '3bc8acb9112e06b67c4a73027eafb2979c297ca6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_Achievements.html',
      1 => 1468259260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5783dbc0e0c5e5_71079080 ($_smarty_tpl) {
?>
<h1 id = "av_title">Achievements</h1>
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
             <img class="media-object" src="img/trophy.png" alt="" width="64" height="64">
         </a>
     </div>
     <div id= "achievementItem" class="media-body">
         <h4 class="media-heading"><span id="av_name"><?php echo $_smarty_tpl->tpl_vars['achievement']->value->getName();?>
</span></h4>
         <span id = "av_date">  <?php echo $_smarty_tpl->tpl_vars['achievement']->value->getCreatedDateDDMMYY();?>
</span>

     </div>
      <div id = "av_mediaRight" class="media-right">
          <?php echo $_smarty_tpl->tpl_vars['achievement']->value->getValue();?>

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
