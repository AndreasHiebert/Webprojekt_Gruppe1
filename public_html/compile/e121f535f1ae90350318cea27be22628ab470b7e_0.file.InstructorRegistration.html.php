<?php
/* Smarty version 3.1.29, created on 2016-07-08 18:30:19
  from "C:\xampp\htdocs\WebProjekt\public_html\view\InstructorRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577fd51bb8fe67_85702811',
  'file_dependency' => 
  array (
    'e121f535f1ae90350318cea27be22628ab470b7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\InstructorRegistration.html',
      1 => 1467922296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577fd51bb8fe67_85702811 ($_smarty_tpl) {
?>
<form action="index.php?controller=LoginController&action=RegisteredInstructor">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>Username:</h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="username"
                                   name="name_txt"
                                   title="Wählen Sie einen Accountnamen">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>E-mail:</h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="email"
                                   name="email_txt"
                                   title="Geben Sie einen gültige Adresse ein">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>Password: </h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="password"
                                   name="pass_txt"
                                   title="Wählen Sie ein Passwort">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>Confirm: </h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="confirm"
                                   name="confirm_txt"
                                   title="Bestätigen Sie ihr Passwort">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                  <!-- spacer to put registration_btn below form -->
                </div>

                <div class="col-xs-6">
                    <h3>
                    <input type="submit"
                           id="registration_btn"
                           title="Bestätigen Sie die Angaben"
                           value="Registrieren">
                    </h3>
                </div>
            </div>
        </div>
</form>
<?php }
}
