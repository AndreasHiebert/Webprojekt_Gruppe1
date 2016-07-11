<?php
/* Smarty version 3.1.29, created on 2016-07-11 10:55:15
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_UserRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57835ef3050334_03096792',
  'file_dependency' => 
  array (
    '208a68e5298e8a434de1b7959cf34f14f567f4e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_UserRegistration.html',
      1 => 1468227311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57835ef3050334_03096792 ($_smarty_tpl) {
?>
<form role="form" action="index.php?controller=LoginController&action=RegisterUser" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
              <input type="text" id="username" class="form-control" name="username_txt" placeholder="Username:">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
              <input type="text" id="email" name="email_txt" class="form-control" title="Geben Sie einen gültige Adresse ein">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
               <input type="text" id="password" name="pass_txt" class="form-control" title="Wählen Sie ein Passwort">
        </div>
        <div class="form-group">
            <label for="confirm">Confirm:</label>
                <input type="text" id="confirm" name="confirm_txt" class="form-control" title="Bestätigen Sie ihr Passwort">
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
                <select class="form-control" id="course" name="course_txt">
                    <option value="ISD" selected>ISD</option>
                    <option value="BMT">BMT</option>
                    <option value="BWL">BWL</option>
                    <option value="CVD">CVD</option>
                    <option value="UFC">UFC</option>
                </select>
        </div>
        <div class="form-group">
            <button type="submit" id="registration_btn" title="Bestätigen Sie die Angaben" class="btn btn-default" value="Registrieren">Registriern</button>
        </div>
</form>
<?php }
}
