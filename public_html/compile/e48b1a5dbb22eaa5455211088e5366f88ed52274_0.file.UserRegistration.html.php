<?php
/* Smarty version 3.1.29, created on 2016-06-21 20:31:21
  from "C:\xampp\htdocs\WebProjekt\public_html\view\UserRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576987f9094296_59000533',
  'file_dependency' => 
  array (
    'e48b1a5dbb22eaa5455211088e5366f88ed52274' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\UserRegistration.html',
      1 => 1466533878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576987f9094296_59000533 ($_smarty_tpl) {
?>

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
                                   title="Bestätigen Sie ihr Passwort">
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
                            <select title="Wählen Sie ihren Studiengang" id="course">
                                <option value="ISD" selected>ISD</option>
                                <option value="BMT">BMT</option>
                                <option value="BWL">BWL</option>
                                <option value="CVD">CVD</option>
                                <option value="UFC">UFC</option>
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
<?php }
}
