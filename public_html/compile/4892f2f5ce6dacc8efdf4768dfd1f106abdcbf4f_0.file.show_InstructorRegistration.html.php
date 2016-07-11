<?php
/* Smarty version 3.1.29, created on 2016-07-11 11:16:08
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_InstructorRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578363d88eae34_19921144',
  'file_dependency' => 
  array (
    '4892f2f5ce6dacc8efdf4768dfd1f106abdcbf4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_InstructorRegistration.html',
      1 => 1468228528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578363d88eae34_19921144 ($_smarty_tpl) {
?>
<form action="index.php?controller=LoginController&action=RegisterInstructor">
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
                                   title="Wählen Sie einen Accountnamen"
                                   maxlength="30">
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
                                   title="Geben Sie einen gültige Adresse ein"
                                   maxlength="50">
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
                            <input type="email"
                                   id="email"
                                   name="email" required
                                   title="Wählen Sie ein Passwort"
                                   maxlength="30">
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
                            <input type="password"
                                   id="confirm"
                                   name="confirm_txt"
                                   title="Bestätigen Sie ihr Passwort"
                                   maxlength="30">
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
