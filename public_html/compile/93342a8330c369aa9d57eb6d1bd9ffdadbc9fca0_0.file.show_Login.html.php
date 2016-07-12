<?php
/* Smarty version 3.1.29, created on 2016-07-12 12:52:04
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_Login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5784cbd44c19b6_50134800',
  'file_dependency' => 
  array (
    '93342a8330c369aa9d57eb6d1bd9ffdadbc9fca0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_Login.html',
      1 => 1468320629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5784cbd44c19b6_50134800 ($_smarty_tpl) {
?>
 <form role="form" action="index.php?controller=LoginController&action=Login" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email_txt" placeholder="Enter E-Mail" maxlength="50" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass_txt" placeholder="Enter Password" maxlength="30" required>
  </div>
  <button type="submit" value="submit" class="btn btn-default">Login</button>
</form>
<a href="index.php?controller=LoginController&action=getUserRegistrationForm">Register as User?</a>
<a href="index.php?controller=LoginController&action=getInstructorRegistrationForm">Register as Instructor?</a>
<?php }
}
