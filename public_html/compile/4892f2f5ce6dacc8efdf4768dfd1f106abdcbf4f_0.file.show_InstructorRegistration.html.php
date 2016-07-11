<?php
/* Smarty version 3.1.29, created on 2016-07-11 15:20:14
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_InstructorRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57839d0e200324_26096348',
  'file_dependency' => 
  array (
    '4892f2f5ce6dacc8efdf4768dfd1f106abdcbf4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_InstructorRegistration.html',
      1 => 1468243210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57839d0e200324_26096348 ($_smarty_tpl) {
?>
<form role="form" action="index.php?controller=LoginController&action=RegisterInstructor" method="post">
  <div class="form-group">
    <label for="username">Name:</label>
    <input type="text" id="username" class="form-control" name="username_txt" placeholder="Name eingeben..." maxlength="30" required>
  </div>

  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email_txt" class="form-control" placeholder="E-mail eingeben..." maxlength="50" required>
  </div>

  <div class="form-group">
    <label for="password">Passwort:</label>
    <input type="password" id="password" name="pass_txt" class="form-control" placeholder="Passwort eingeben..." maxlength="30" required>
  </div>

  <div class="form-group">
      <label for="confirm">Passwort bestätigen:</label>
      <input type="password" id="confirm" name="confirm_txt" class="form-control" placeholder="Passwort bestätigen..." maxlength="30" required>
  </div>

  <div class="form-group">
      <button type="submit" id="registration_btn" title="Bestätigen Sie die Angaben" class="btn btn-default" value="Registrieren">Registriern!</button>
  </div>
</form>
<?php }
}
