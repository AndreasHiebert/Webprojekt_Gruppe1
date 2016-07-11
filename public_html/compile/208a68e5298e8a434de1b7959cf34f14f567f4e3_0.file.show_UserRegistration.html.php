<?php
/* Smarty version 3.1.29, created on 2016-07-11 11:17:22
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_UserRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578364227a2338_86041793',
  'file_dependency' => 
  array (
    '208a68e5298e8a434de1b7959cf34f14f567f4e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_UserRegistration.html',
      1 => 1468228640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578364227a2338_86041793 ($_smarty_tpl) {
?>
<form role="form" action="index.php?controller=LoginController&action=RegisterUser" method="post">
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
                                   name="username_txt"
                                   title="Wählen Sie einen Accountnamen"
                                   maxlength="30"
                                   required>
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
                            <input type="email"
                                   id="email"
                                   name="email"
                                   title="Geben Sie einen gültige Adresse ein"
                                   maxlength="50"
                                   required>
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
                            <input type="password"
                                   id="password"
                                   name="pass_txt"
                                   title="Wählen Sie ein Passwort"
                                   maxlength="30"
                                   required>
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
                                   maxlength="30"
                                   required>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>Course: </h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <select title="Wählen Sie ihren Studiengang" id="course" name="course_txt">
                                <option value="ISD" selected>ISD</option>
                            </select>
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
