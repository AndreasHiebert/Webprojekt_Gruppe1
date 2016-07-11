<?php
/* Smarty version 3.1.29, created on 2016-07-11 12:19:59
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_UserRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578372cf3ee4d6_71246318',
  'file_dependency' => 
  array (
    '208a68e5298e8a434de1b7959cf34f14f567f4e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_UserRegistration.html',
      1 => 1468231597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578372cf3ee4d6_71246318 ($_smarty_tpl) {
?>
<form role="form" action="index.php?controller=LoginController&action=RegisterUser" method="post">

        <div class="row">
          <div class="col-xs-6">
            <!-- spacer to put registration_btn below form -->
          </div>

        <form role="form" action="index.php?controller=LoginController&action=RegisterUser" method="post">
        <div class="form-group">
            <label for="username">Name:</label>
              <input type="text" id="username" class="form-control" name="username_txt" placeholder="Username:" maxlength="30" required>
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
                <input type="password" id="confirm" name="confirm_txt" class="form-control" placeholder="Passwort bestätigen..." maxlength="30" required>>
        </div>
        <div class="form-group">
            <label for="course">Kurs:</label>
                <select class="form-control" id="course" name="course_txt">
                    <option value="ISD" selected>ISD</option>
                </select>
        </div>
        <div class="form-group">
            <button type="submit" id="registration_btn" title="Bestätigen Sie die Angaben" class="btn btn-default" value="Registrieren">Registriern!</button>
        </div>
</form>
<?php }
}
