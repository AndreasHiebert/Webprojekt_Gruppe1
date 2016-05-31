<?php
/* Smarty version 3.1.29, created on 2016-05-31 01:40:27
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Registration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574ccf6bc681e9_95341407',
  'file_dependency' => 
  array (
    '56db738c599cc0359d3d4ed81d70ce0043979204' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Registration.html',
      1 => 1464651522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574ccf6bc681e9_95341407 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Study Buddy - Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Custom theme -->
        <link rel="stylesheet" type="text/css" href="../css/Registration.css">
    </head>
    <body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header>
                        <h1>Study Buddy</h1>
                    </header>
                </div>
            </div>
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
                <div class="col-xs-12">
                    <h3>
                    <input type="submit"
                           id="registration_btn"
                           title="Bestätigen Sie die Angaben"
                           value="Registrieren">
                    </h3>
                </div>
            </div>
        </div>
    </center>
    <!-- jQuery library -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Latest compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
