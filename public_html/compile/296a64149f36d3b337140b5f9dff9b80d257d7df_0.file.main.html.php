<?php
/* Smarty version 3.1.29, created on 2016-06-02 11:21:04
  from "C:\xampp\htdocs\Webprojekt_Gruppe1\public_html\view\main.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574ffa80a00dc8_13843700',
  'file_dependency' => 
  array (
    '296a64149f36d3b337140b5f9dff9b80d257d7df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Webprojekt_Gruppe1\\public_html\\view\\main.html',
      1 => 1464784954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574ffa80a00dc8_13843700 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Webprojekt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>The users are:</h1>
        <ul>
            
            <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
            <li>
                <a href="index.php?controller=User&action=apply&id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
</a>
                <a href="index.php?controller=User&action=apply&username=<?php echo $_smarty_tpl->tpl_vars['user']->value->getUsername();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getUsername();?>
</a>
                <a href="index.php?controller=User&action=apply&password=<?php echo $_smarty_tpl->tpl_vars['user']->value->getPassword();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getPassword();?>
</a>
                <a href="index.php?controller=User&action=apply&regdate=<?php echo $_smarty_tpl->tpl_vars['user']->value->getRegdate();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getRegdate();?>
</a>
                <a href="index.php?controller=User&action=apply&email=<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</a>
                <a href="index.php?controller=User&action=apply&type=<?php echo $_smarty_tpl->tpl_vars['user']->value->getType();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getType();?>
</a>
            </li>
            <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
        </ul>
        <div>Those are the users and their data saved in the database</div>
    </body>
</html>


<?php }
}
